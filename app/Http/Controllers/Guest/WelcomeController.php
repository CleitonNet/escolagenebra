<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function welcome () { return view('pages.guest.welcome'); }
}
