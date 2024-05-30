<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attempt extends Model
{
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attemptquestion(){
        return $this->hasMany(AttemptQuestion::class);
    }

    public function exam() : BelongsTo {
        return $this->belongsTo(Exam::class);
    }

    public function question() : HasMany {
        return $this->hasMany(AttemptQuestion::class);
    }
}
