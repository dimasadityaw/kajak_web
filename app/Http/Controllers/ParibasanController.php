<?php

namespace App\Http\Controllers;

use App\Imports\ParibasanImport;
use App\Models\Paribasan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ParibasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paribasan = Paribasan::query()->get();
        return view('pages.paribasan.index', compact('paribasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xls,xlsx,csv|max:2048',
        ]);
        Excel::import(new ParibasanImport(), $request->file('file'));
        return redirect()->back()->with('success', 'Berhasil mengimport paribasan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paribasan  $paribasan
     * @return \Illuminate\Http\Response
     */
    public function show(Paribasan $paribasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paribasan  $paribasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Paribasan $paribasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paribasan  $paribasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paribasan $paribasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paribasan  $paribasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paribasan $paribasan)
    {
        //
    }
}
