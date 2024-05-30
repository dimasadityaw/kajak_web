<?php

namespace App\Imports;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class QuestionImport implements ToCollection
{
    protected Exam $exam;
    protected Collection $alphabet;

    public function __construct(Exam $exam)
    {
        $this->exam = $exam;
        $this->alphabet = collect(['A', 'B', 'C', 'D']);
    }

    public function collection(Collection $rows)
    {
        // DB::beginTransaction();
        // try {
        foreach ($rows as $r => $row) {
            //skip first row
            if ($r == 0) {
                continue;
            }

            $question = new Question();
            $question->exam_id = $this->exam->id;
            $question->question = $row[0];
            $question->save();

            for ($i = 2; $i < 6; $i++) {
                $answer = new Answer();
                $answer->question_id = $question->id;
                $answer->answer = $row[$i];
                $answer->is_correct = $this->alphabet->search(strtoupper($row[1])) + 2 == $i;
                $answer->save();
            }
        }

        //     DB::commit();
        // } catch (Exception $e) {
        //     DB::rollBack();
        //     throw $e;
        // }
    }
}
