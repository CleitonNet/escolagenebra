<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    public function index () { return view('pages.admin.web.quiz.index'); }
    public function create () { return view('pages.admin.web.quiz.create'); }
    public function edit ($id) { return view('pages.admin.web.quiz.edit',compact('id')); }
    public function view ($id) { return view('pages.admin.web.quiz.view',compact('id')); }
    public function question_create ($id) { return view('pages.admin.web.quiz.question_create',compact('id')); }
    public function question_edit ($id) { return view('pages.admin.web.quiz.question_edit',compact('id')); }
}
