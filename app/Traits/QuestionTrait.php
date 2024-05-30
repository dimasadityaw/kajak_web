<?php

namespace App\Traits;

use App\Models\Attempt;

trait QuestionTrait
{
    public function countExamScore(Attempt $attempt): float
    {
        $singleScore = 1 / 15 * 100;
        $score = $attempt->attemptquestion->sum(function($aq) use ($singleScore){
            return $aq->answer_id == $aq->question->correctAnswer->id ? $singleScore : 0;
        });
        return $score;
    }
}