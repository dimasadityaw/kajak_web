<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory, SoftDeletes;

    // relation with attempts table
    public function attempt()
    {
        return $this->hasMany(Attempt::class);
    }

    // relation with question table
    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
