<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Web\QuizController;
use App\Http\Controllers\Admin\Web\SchoolController;
use App\Http\Controllers\Admin\Web\SlideController;
use Illuminate\Support\Facades\Route;


Route::get('admin/dashboard', [IndexController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function() {
    Route::get('/profile', [IndexController::class, 'profile'])->name('profile');
    Route::get('/setup', [IndexController::class, 'setup'])->name('setup');

    Route::prefix('web')->name('web.')->group(function() {
        Route::prefix('slide')->name('slide.')->group(function() {
            Route::get('/', [SlideController::class, 'index'])->name('index');
            Route::get('/create', [SlideController::class, 'create'])->name('create');
            Route::get('{id}/edit', [SlideController::class, 'edit'])->name('edit');
        });
        Route::prefix('school')->name('school.')->group(function() {
            Route::get('/', [SchoolController::class, 'index'])->name('index');
            Route::get('/create', [SchoolController::class, 'create'])->name('create');
            Route::get('{id}/edit', [SchoolController::class, 'edit'])->name('edit');
        });
        Route::prefix('quiz')->name('quiz.')->group(function() {
            Route::get('/', [QuizController::class, 'index'])->name('index');
            Route::get('/create', [QuizController::class, 'create'])->name('create');
            Route::get('{id}/edit', [QuizController::class, 'edit'])->name('edit');
            Route::get('{id}/view', [QuizController::class, 'view'])->name('view');
            Route::get('{id}/question_create', [QuizController::class, 'question_create'])->name('question_create');
            Route::get('{id}/question_edit', [QuizController::class, 'question_edit'])->name('question_edit');
        });
    });

    Route::prefix('contabilidade')->name('contabilidade.')->group(function() {
        Route::prefix('balanco')->name('balanco.')->group(function() {
            Route::get('/', [SlideController::class, 'index'])->name('index');
            Route::get('/create', [SlideController::class, 'create'])->name('create');
            Route::get('{id}/edit', [SlideController::class, 'edit'])->name('edit');
        });
    });
});

