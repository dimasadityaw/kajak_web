<?php

namespace App\Http\Controllers;

use App\Imports\QuestionImport;
use App\Imports\UserImport;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AttemptExport;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data exam from database
        $exam = Exam::query()->latest();

        //if user is not admin then filter by user_id
        if (auth()->user()->role != 'admin') {
            $exam = $exam->where('user_id', auth()->id());
        }

        $exam = $exam->get();

        return view('pages.exam.index', compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.exam.form');
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
            'name' => 'required|string'
        ]);

        $exam = new Exam();
        $exam->name = $request->name;
        $exam->user_id = auth()->id();
        $exam->code = strtoupper(Str::random(6));
        $exam->save();

        return redirect()->route('exam.show', $exam)->with('success', 'Berhasil menambahkan ujian baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view('pages.exam.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('pages.exam.form', compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        $exam->name = $request->name;
        $exam->save();

        return redirect()->to('/exam')
            ->with('success', 'Berhasil memperbarui data ujian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus ujian');
    }

    public function upload(Exam $exam, Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xls,xlsx,csv|max:2048',
        ]);
        $exam->question()->delete();
        Excel::import(new QuestionImport($exam), $request->file('file'));
        return redirect()->back()->with('success', 'Berhasil mengimport soal');
        // dd($request->all());
    }

    public function uploadUser(Exam $exam, Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xls,xlsx,csv|max:2048',
        ]);
        Excel::import(new UserImport($exam), $request->file('file'));
        return redirect()->back()->with('success', 'Berhasil mengimport peserta');
    }

    public function user(Exam $exam)
    {
        return view('pages.exam.user', compact('exam'));
    }

    public function userExport(Exam $exam)
    {
        return Excel::download(new AttemptExport($exam), "{$exam->name}.xlsx");
    }

    public function deleteAllQuestion(Exam $exam)
    {
        $exam->question()->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus semua soal');
    }
}
