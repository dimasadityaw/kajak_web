<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $accessAliases = [
        'teacher' => "lecturer",
        'user' => "student",
        'lecturer' => 'lecturer'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //check if logged user is admin
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        //get data guru
        $lecturer = User::query()
            ->where('role', '!=', 'admin')
            ->where('role', $this->accessAliases[$request->type])
            ->latest()
            ->get();

        return view('pages.lecturer.index', compact('lecturer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lecturer.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate user input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //create new user instance
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 'lecturer';
        $user->save();

        //return with message
        return redirect()->route('user.index', ['type' => 'teacher'])->with('success', 'Berhasil menambah data guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($user->role == "lecturer") {
            return view('pages.lecturer.form', compact('user'));
        } else {
            return view('pages.lecturer.form-user', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //validate user input
        $request->validate([
            'name' => 'required|string',
            'email' => auth()->user()->role != 'admin' || $user->role == 'student' ? 'required|string' : 'required|email',
        ]);

        //edit data user

        if (auth()->user()->role == 'admin') {
            $user->name = $request->name;
            
            if(str_contains($request->email, '@')){
                $user->email = $request->email;
            }else{
                $user->email = $request->email . '@student.com';
                $user->nisn = $request->email;
            }
        }

        if ($request->has('password') && $request->password != '') {
            $user->password = Hash::make($request->password);
        }

        

        $user->save();

        $userType = array_search($user->role, $this->accessAliases);
        //return with message
        if (auth()->user()->role != 'admin') {
            return redirect()->back()->with('success', 'Berhasil memperbarui data');
        } else {
            return redirect()->route('user.index', ['type' => $userType])->with('success', 'Berhasil memperbarui data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $userType = array_search($user->role, $this->accessAliases);
        //delete user
        $user->delete();

        return redirect()->route('user.index', ['type' => $userType])->with('success', 'Berhasil menghapus data ' . $userType);
    }
}
