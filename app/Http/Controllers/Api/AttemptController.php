<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attempt;
use App\Models\AttemptQuestion;
use App\Models\Exam;
use App\Models\Question;
use App\Rules\ExamTokenExists;
use Illuminate\Http\Request;

class AttemptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'absen' => 'required|numeric',
            'kelas' => 'required|max:255',
            'code' => ['required', new ExamTokenExists],
        ]);

        $exam = Exam::query()
            ->whereRaw('UPPER(code) = ?', [strtoupper($request->code)])
            ->first();

        //check if attempt exist
        $existingAttempt = Attempt::query()
            ->where('name', $request->name)
            ->where('kelas', $request->kelas)
            ->where('absen', $request->absen)
            ->first();

        //save attempt data
        $attempt = $existingAttempt ?? new Attempt;
        if(!$existingAttempt){
            $attempt->name = $request->name;
            $attempt->kelas = $request->kelas;
            $attempt->absen = $request->absen;
            $attempt->exam_id = $exam->id;
            $attempt->started_at = now();
            $attempt->score = 0;
            $attempt->save();
        }

        //get all question and save
        if($attempt->attemptquestion->isEmpty()){
            $questions = Question::query()
            ->where('exam_id', $exam->id)
            ->inRandomOrder()
            ->limit(15)
            ->get();

            $questions->map(function($question) use ($attempt){
                $aq = new AttemptQuestion();
                $aq->attempt_id = $attempt->id;
                $aq->question_id = $question->id;
                $aq->save();
            });
        }

        return response()->json([
            'status' => true,
            'attempt' => $attempt,
            'message' => 'Mulai Ujian',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attempt $attempt)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Attempt $attempt, Request $request)
    {
        $attempt->finished_at = now();
        $attempt->save();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil menyelesaikan ujian',
            'attempt' => $attempt,
        ]);
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
