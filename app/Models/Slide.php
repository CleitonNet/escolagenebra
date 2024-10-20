<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [ 'title1', 'title2', 'btnlabel1', 'btnaction1', 'btnaction1Target', 'btnlabel2', 'btnaction2', 'btnaction2Target', 'image', 'verticalImage', 'thumbnail', 'alignment', 'btnactionSlide', 'slideTarget', 'newPage1', 'newPage2', 'colorTitle1', 'colorTitle2', 'weightTitle1', 'weightTitle2', 'alignTitle1', 'alignTitle2', 'shadowTitle1', 'shadowTitle2' ];
}
