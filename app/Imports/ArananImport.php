<?php

namespace App\Imports;

use App\Models\Aranan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ArananImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $collection->each(function ($item) {
            $aranan = new Aranan();
            $aranan->javanese = $item[0];
            $aranan->aranan = $item[1];
            $aranan->indonesian = $item[2];
            $aranan->img = $item[3];
            $aranan->type = $item[4];
            $aranan->save();
        });
    }
}
