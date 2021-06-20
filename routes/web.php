<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Question\QuestionController;
use App\Http\Controllers\QuestionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Statistics\RatingController;
use App\Http\Controllers\IndexController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/index', function () {
//    return view('index');
//});
Route::get('/index', [IndexController::class, 'index'])
    ->name('home');

Route::get('/', [IndexController::class, 'index']);
Route::get('/index/rating', [RatingController::class, 'getRatingUsersTop'])->name('rating');

Route::get('/getUser', [App\Http\Controllers\Auth\AuthController::class, 'getUser']);
Route::get('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])
    ->middleware('hasLogged');


Route::namespace('Question')
    ->middleware('hasLogged')
    ->group(function () {
        Route::get('/education', [QuestionController::class, 'index']);
        Route::get('/questions', [QuestionController::class, 'getQuestions'])->name('questions');
        Route::post('/setAnswer', [QuestionController::class, 'setAnswer']);
    });

Route::namespace('Auth')->group(function () {
    Route::get('/auth/login', [AuthController::class, 'viewLogin'])
        ->name('login');
    Route::get('/auth/register', [AuthController::class, 'viewRegister']);
    Route::post('/auth/login', [AuthController::class, 'login']);
    Route::post('/auth/register', [AuthController::class, 'register']);
});

Route::get('/profile/index', function () {
    return view('account/index');
});


//Auth::routes();
