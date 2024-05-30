<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Attempt;
use App\Models\AttemptQuestion;
use App\Rules\ExamOngoing;
use App\Traits\QuestionTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    use QuestionTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Attempt $attempt, Request $request)
    {  
        $page = $request->page;

        //if page exceed number of question
        if($page > 15){
            $page = 1;
        }

        //create question if not yet created
        if($attempt->question->isEmpty()) {
            $attempt->exam->question->shuffle()->take(15)->each(function($question) use ($attempt){
                $attempt->question()->create([
                    'attempt_id' => $attempt->id,
                    'question_id' => $question->id,
                ]);
            });
        }
        return QuestionResource::make(
            AttemptQuestion::query()
                ->where('attempt_id', $attempt->id)
                ->get()->get($page - 1)
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Attempt $attempt, Request $request)
    {
        // $request->validate([
        //     'question_id' => ['required', 'string', 'numeric'],
        //     'answer_id' => ['required', 'string', 'numeric'],
        //     'attempt_id' => ['required', 'string', 'numeric', new ExamOngoing],
        // ]);

        $aq = AttemptQuestion::query()
            ->where('question_id', $request->question_id)
            ->where('attempt_id', $request->attempt_id)
            ->first();

        $aq->answer_id = $request->answer_id;
        $aq->save();
        
        $attempt->score = $this->countExamScore($attempt);
        $attempt->save();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil menyimpan jawaban',
        ]);
        
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
