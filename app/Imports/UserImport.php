<?php

namespace App\Imports;

use App\Models\Attempt;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    private $exam;

    public function __construct(Exam $exam)
    {
        $this->exam = $exam;
    }

    public function collection(Collection $collection)
    {
        $collection->slice(1)->each(function ($el) {
            $rowUser = $this->transformToObject($el);
            $user = User::query()
                ->where(function ($q) use ($rowUser) {
                    $q->where('nisn', $rowUser->nisn)
                        ->orWhere('email', $rowUser->nisn . '@student.com');
                })
                ->withTrashed()
                ->first();


            //save user if not yet save
            if (!$user) {
                $rowUser->email = $rowUser->nisn . '@student.com';
                $rowUser->role = 'student';
                $rowUser->save();

                $user = $rowUser;
            }

            if ($user->trashed()) {
                $user->restore();
            }

            //save attempt
            $attempt = Attempt::where('user_id', $user->id)->first();
            if (!$attempt) {
                $attempt = new Attempt();
                $attempt->exam_id = $this->exam->id;
                $attempt->user_id = $user->id;
                $attempt->password = $user->password;
                $attempt->started_at = now();
                $attempt->save();
            }
        });
    }

    private function transformToObject(Collection $el): User
    {
        $user = new User();
        $user->name = trim($el[0]);
        $user->nisn = trim($el[1]);
        $user->kelas = trim($el[2]);
        $user->password = Hash::make(trim($el[3]));

        return $user;
    }
}
