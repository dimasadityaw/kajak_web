<?php

namespace App\Rules;

use App\Models\Attempt;
use Illuminate\Contracts\Validation\Rule;

class ExamOngoing implements Rule
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
        return Attempt::find($value)->finished_at == null;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Ujian telah diselesaikan, tidak dapat mengubah jawaban';
    }
}
