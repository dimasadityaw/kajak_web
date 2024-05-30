<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tembung extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function child()
    {
        return $this->hasMany(Tembung::class, 'parent_id')->with('child');
    }
}
