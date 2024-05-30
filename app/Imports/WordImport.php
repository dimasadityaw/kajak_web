<?php

namespace App\Imports;

use App\Models\Word;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class WordImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $collection->each(function ($item) {
            $word = new Word();
            $word->ngoko = $item[0];
            $word->madya = $item[1];
            $word->krama = $item[2];
            $word->indonesian = $item[3];
            $word->save();
        });
    }
}
