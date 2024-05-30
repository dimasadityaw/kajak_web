<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class QuestionController extends Controller
{
    private Collection $alphabet;

    public function __construct()
    {
        $this->alphabet = collect(['A', 'B', 'C', 'D']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Exam $exam)
    {
        return view('pages.question.form', compact('exam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Exam $exam, Request $request)
    {
        DB::beginTransaction();
        try {
            $question = new Question();
            $question->exam_id = $exam->id;
            $question->question = $request->question;
            $question->save();

            foreach ($request->answer as $i => $postedAnswer) {
                $answer = new Answer();
                $answer->question_id = $question->id;
                $answer->answer = $postedAnswer;
                $answer->is_correct = $this->alphabet->search($request->correct) == $i;
                $answer->save();
            }
            DB::commit();
            return redirect()->route('exam.show', $exam)->with('success', 'Berhasil menyimpan soal');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('error', 'Terjadi Kesalahan, silahkan coba lagi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam, Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam, Question $question)
    {
        return view('pages.question.form', compact('exam', 'question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam, Question $question)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $question->exam_id = $exam->id;
            $question->question = $request->question;
            $question->save();

            foreach ($question->answer as $i => $answer) {
                if ($request->answer[$i]) {
                    echo $i;
                    $answer->question_id = $question->id;
                    $answer->answer = $request->answer[$i];
                    $answer->is_correct = $this->alphabet->search($request->correct) == $i;
                    $answer->save();
                }
            }
            DB::commit();
            return redirect()->route('exam.show', $exam)->with('success', 'Berhasil mengedit soal');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
            return redirect()->back()->with('error', 'Terjadi Kesalahan, silahkan coba lagi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam, Question $question)
    {
        $question->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus soal');
    }
}
