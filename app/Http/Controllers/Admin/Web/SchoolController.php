<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    public function index () { return view('pages.admin.web.school.index'); }
    public function create () { return view('pages.admin.web.school.create'); }
    public function edit ($id) { return view('pages.admin.web.school.edit',compact('id')); }
}
