<?php

namespace App\Imports;

use App\Models\Parikan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ParikanImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $collection->each(function ($item) {
            $parikan = new Parikan();
            $parikan->parikan = $item[0];
            $parikan->meaning_in_java = $item[1];
            $parikan->meaning_in_indo = $item[2];
            $parikan->save();
        });
    }
}
