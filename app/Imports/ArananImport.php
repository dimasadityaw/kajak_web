<?php

namespace App\Imports;

use App\Models\Aranan;
use Exception;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class ArananImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        DB::beginTransaction();
        try {
            $collection->each(function ($item) {
                $aranan = new Aranan();
                $aranan->javanese = $item[0];
                $aranan->aranan = $item[1];
                $aranan->indonesian = $item[2];
                $aranan->img = $item[3];
                $aranan->type = $item[4];
                $aranan->save();
            });
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json($e->getTrace());
        }
    }
}
