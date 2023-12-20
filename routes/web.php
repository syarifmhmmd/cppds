<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuizController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auththenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/quiz', [QuizController::class, 'index'])->middleware('auth');

// Route::get('/quiz', function () {
//     return view('quiz');
// })->middleware('auth');

Route::get('/start-quiz', function () {
    return view('start-quiz');
})->middleware('auth');
