<?php

namespace App\Rules;

use App\Models\Exam;
use Illuminate\Contracts\Validation\Rule;

class ExamTokenExists implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Exam::query()->whereRaw('UPPER(code) = ?', [strtoupper($value)])->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ujian tidak ditemukan';
    }
}
