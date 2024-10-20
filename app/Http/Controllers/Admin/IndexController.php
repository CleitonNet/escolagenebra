<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function dashboard () { return view('pages.admin.dashboard'); }
    public function profile () { return view('pages.admin.profile'); }
    public function setup () { return view('pages.admin.setup'); }
}
