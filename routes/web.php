<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('signup',[Controller::class, 'signupForm'])->name('signup-form');
Route::get('statement',[Controller::class, 'statementForm'])->name('statement-form');
Route::get('signin',[Controller::class, 'signinForm'])->name('signin-form');
//UserController
Route::post('signup',[UserController::class, 'signup'])->name('signup');
Route::post('signin',[UserController::class, 'signin'])->name('signin');
Route::get('logout',[UserController::class, 'logout'])->name('logout');


//StatementController
Route::post('state',[StatementController::class, 'store'])->name('state-create');
