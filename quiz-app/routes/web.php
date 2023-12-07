<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;



Route::get('/', [QuizController::class, 'index']);

Route::get('/quiz/{id?}', [QuizController::class, 'form'])
     ->name('quiz.form')
     ->middleware('checkname');

Route::post('/quiz/{id?}', [QuizController::class, 'storeOrUpdate'])
     ->name('quiz.storeOrUpdate')
     ->middleware('checkname');

Route::get('/error', function () {
    return response()->view('error', [], 404);
});
