<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'thumbnail', 'title', 'phone', 'address', 'urlScheduleVisite', 'urlHowToGetThere', 'enrollment' ];

    public function segments()
    {
        return $this->belongsToMany(Segment::class);
    }
}
