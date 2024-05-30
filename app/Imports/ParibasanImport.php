<?php

namespace App\Imports;

use App\Models\Paribasan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ParibasanImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $collection->each(function ($item) {
            $paribasan = new Paribasan();
            $paribasan->paribasan = $item[0];
            $paribasan->meaning_in_java = $item[1];
            $paribasan->meaning_in_indo = $item[2];
            $paribasan->save();
        });
    }
}
