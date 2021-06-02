<?php

use App\Http\Controllers\QuestionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/questions', [QuestionsController::class, 'getQuestions'])->name('questions');

//Auth::routes();
