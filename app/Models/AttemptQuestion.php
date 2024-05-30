<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttemptQuestion extends Model
{
    protected $fillable = ['attempt_id', 'question_id'];
    use HasFactory;

    public function attempt(){
        return $this->belongsTo(Attempt::class);
    }

    public function question() : BelongsTo {
        return $this->belongsTo(Question::class);
    }

    public function answer(){
        return $this->belongsTo(Answer::class);
    }
}
