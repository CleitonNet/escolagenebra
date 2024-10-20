<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    public function index () { return view('pages.admin.web.slide.index'); }
    public function create () { return view('pages.admin.web.slide.create'); }
    public function edit ($id) { return view('pages.admin.web.slide.edit', compact('id')); }
}
