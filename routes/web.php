<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationFormController;
use App\Http\Controllers\StudentController;
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

Route::get('registration', [StudentController::class, 'index']) -> name('registration');

Route::resource('students', StudentController::class);

Route::get('/index', [StudentController::class, 'index']) -> name('index');
Route::get('/create', [StudentController::class, 'create']) -> name('create');
Route::get('/read', [StudentController::class, 'show']) -> name('read');
Route::get('/update', [StudentController::class, 'edit']) -> name('update');
