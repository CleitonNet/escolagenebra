<?php

use App\Http\Controllers\Guest\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::name('guest.')->group(function() {
    Route::get('/',                       [WebsiteController::class, 'welcome'           ])->name('welcome');
    Route::get('/sobre',                  [WebsiteController::class, 'about'             ])->name('about');
    Route::get('/metodologia',            [WebsiteController::class, 'methodology'       ])->name('methodology');
    Route::get('/escolas',                [WebsiteController::class, 'campus'            ])->name('campus');
    Route::get('/cosmovisao',             [WebsiteController::class, 'cosmovisao'        ])->name('cosmovisao');
    Route::get('/modelo-educacional',     [WebsiteController::class, 'educational_model' ])->name('educational_model');
    Route::get('/programa-triligue',      [WebsiteController::class, 'trilingual_program'])->name('trilingual_program');
    Route::get('/campeonatos-esportivos', [WebsiteController::class, 'championships'    ])->name('championships');
    Route::get('/sistema-educacional',    [WebsiteController::class, 'education_system'  ])->name('education_system');
    Route::name('segments.')->group(function() {
        Route::get('/bercario',               [WebsiteController::class, 'garderie'          ])->name('garderie');
        Route::get('/fundamental-I',          [WebsiteController::class, 'fundamental1'      ])->name('fundamentalI');
        Route::get('/fundamental-II',         [WebsiteController::class, 'fundamental2'      ])->name('fundamentalII');
        Route::get('/primary',                [WebsiteController::class, 'primary'           ])->name('primary');
        Route::get('/ensino-medio',           [WebsiteController::class, 'high_school'       ])->name('high-school');
    });
    Route::get('/matricula',              [WebsiteController::class, 'enrollment'          ])->name('enrollment');
    Route::get('/gallery',              [WebsiteController::class, 'gallery'          ])->name('gallery');
});
