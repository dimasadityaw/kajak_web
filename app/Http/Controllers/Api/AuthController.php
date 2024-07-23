<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attempt;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        try {
            //check if nisn exists
            $user = User::query()
                ->where('email', $request->nisn . "@student.com")
                ->firstOrFail();
            //check password
            $attempt = $user
                ->attempt()
                ->whereHas('exam')
                ->get()
                ->first(fn ($att) => Hash::check($request->password, $att->password));
            if (!$attempt) {
                $attempt = $user
                    ->attempt()
                    ->withTrashed()
                    ->get()
                    ->first(fn ($att) => Hash::check($request->password, $att->password));
            }

            //if password incorrect, throw error
            // if ($attempt == null) throw (new Exception());

            //login user
            Auth::loginUsingId($user->id);
            auth()->user()->{'activeAttempt'} = $attempt;
            unset($user->attempt);

            return response()->json([
                'user' => $user,
                'token' => $user->createToken('authToken')->plainTextToken,
                'attempt' => $attempt->deleted_at == null ? $attempt : null
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'nisn atau password salah',
                'status' => false
            ]);
        }
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
