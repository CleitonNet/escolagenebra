<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function welcome()            { return view('pages.guest.welcome');            }
    public function about()              { return view('pages.guest.about');              }
    public function methodology()        { return view('pages.guest.methodology');        }
    public function campus()             { return view('pages.guest.campus');             }
    public function cosmovisao()         { return view('pages.guest.cosmovisao');         }
    public function educational_model()  { return view('pages.guest.educational_model');  }
    public function trilingual_program() { return view('pages.guest.trilingual_program'); }
    public function championships()      { return view('pages.guest.championships');      }
    public function education_system()   { return view('pages.guest.education_system');   }
    public function garderie()           { return view('pages.guest.garderie');           }
    public function fundamental1()       { return view('pages.guest.fundamental1');       }
    public function fundamental2()       { return view('pages.guest.fundamental2');       }
    public function high_school()        { return redirect()->away('https://ib.escolagenebra.com.br/');     }
    public function enrollment()           { return view('pages.guest.enrollment');           }
    public function gallery()           { return view('pages.guest.gallery');           }
}
