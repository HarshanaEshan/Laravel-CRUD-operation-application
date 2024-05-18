<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationFormController;
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

Route::get('/', function () { return view('pages.home.index'); }) -> name('home');
Route::post('/admin', [AdminController::class, 'AdminLogin']) -> name('admin');
Route::get('registration', [RegistrationFormController::class, 'registrationPage']) -> name('registration');
