<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tembung;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function paramasastra()
    {
        $tembung = Tembung::query()
            ->whereNull('parent_id')
            ->with('child')
            ->get();

        return response()->json($tembung);
    }
}
