<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    private $imbuhanBelakang = [
        'ne'
    ];

    private $imbuhanDepan = [];

    public function __invoke(Request $request)
    {
        $submittedWords = collect(explode(' ', strtolower($request->text)));
        $translatedWord = collect([]);

        $submittedWords->each(function ($w) use ($request, $translatedWord) {
            $word = Word::query()
                ->where($request->from, $w)
                ->first();

            if ($word) {
                $translatedWord->push($word->{$request->to});
            } elseif (!$word && ($this->str_ends_with_any($w, $this->imbuhanBelakang))) {
                $removedString = $this->str_ends_with_any($w, $this->imbuhanBelakang, false);
                $word = Word::query()
                    ->where($request->from, substr($w, 0, (0 - strlen($removedString))))
                    ->first();
                $translatedWord->push($word->{$request->to} . $removedString);
            } else {
                $translatedWord->push($w);
            }
        });

        return response()->json(strtolower(implode(' ', $translatedWord->toArray())));
    }

    private function str_ends_with_any($haystack, array $needles, $return = true)
    {
        foreach ($needles as $needle) {
            if (str_ends_with($haystack, $needle)) {
                return $return ? true : $needle;
            }
        }
        return false;
    }
}
