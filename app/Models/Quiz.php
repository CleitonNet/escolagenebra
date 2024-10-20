<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['name','song','cover','thumbnail','description','result1','result2','result3','result4'];

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
