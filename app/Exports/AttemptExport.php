<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Exam;
use App\Models\Attempt;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AttemptExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected Exam $exam;
    public function __construct(Exam $exam)
    {
        $this->exam = $exam;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // dd($this->exam->attempt);
        return $this->exam
            ->attempt()
            ->whereHas('user')
            ->get()
            ->map(function (Attempt $attempt, int $key) {
                return [
                    $key + 1,
                    strstr($attempt->user->email, '@', true),
                    $attempt->user->name,
                    Carbon::parse($attempt->started_at)->translatedFormat('l, d F Y - h:m A'),
                    Carbon::parse($attempt->finished_at)->translatedFormat('l, d F Y - h:m A'),
                    $attempt->score == null ? "0" : $attempt->score,
                ];
            });
    }

    /**
     * @return string[]
     */
    public function headings(): array
    {
        return [
            'No',
            'NISN',
            'Nama',
            'Mulai Mengerjakan',
            'Selesai Mengerjakan',
            'Nilai',
        ];
    }
}
