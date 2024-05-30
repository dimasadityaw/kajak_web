<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sastra extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function child()
    {
        return $this->hasMany(Sastra::class, 'parent_id', 'id');
    }
}
