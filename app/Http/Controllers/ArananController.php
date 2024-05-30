<?php

namespace App\Http\Controllers;

use App\Imports\ArananImport;
use App\Models\Aranan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ArananController extends Controller
{
    private $arananType;

    public function __construct()
    {
        $this->arananType = collect([
            'anakkewan'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $aranans = Aranan::query();

        // if ($request->has('type')) {
        //     $aranans->where('type', $this->arananType->search(fn ($item, $key) => $item == $request->type));
        // }

        // $aranans->get();
        return view('pages.aranan.index');
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
        Excel::import(new ArananImport(), $request->file('file'));
        return redirect()->back()->with('success', 'Berhasil mengimport aranan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aranan  $aranan
     * @return \Illuminate\Http\Response
     */
    public function show(Aranan $aranan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aranan  $aranan
     * @return \Illuminate\Http\Response
     */
    public function edit(Aranan $aranan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aranan  $aranan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aranan $aranan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aranan  $aranan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aranan $aranan)
    {
        //
    }
}
