<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Aranan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArananController extends Controller
{
    private $storagePath = [
        '/storage/kembang/',
        '/storage/bocah/',
        '/storage/wektu/',
        '/storage/kewan/'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aranan = Aranan::query();

        if ($request->has('type')) $aranan->where('type', $request->type);

        if ($request->has('q')) $aranan->where(function ($q) use ($request) {
            $q->where('aranan', 'like', '%' . $request->q . '%')
                ->orWhere('indonesian', 'like', '%' . $request->q . '%')
                ->orWhere('javanese', 'like', '%' . $request->q . '%');
        });

        $aranan = $aranan->get();
        $aranan->each(function($q){
            $q->is_open = false;
            $q->img = asset($this->storagePath[$q->type - 1] . $q->img);
        });

        return DataTables::of($aranan)->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
