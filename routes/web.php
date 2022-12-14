<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PendahuluanController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return redirect(route('login'));
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('mahasiswa',MahasiswaController::class);
Route::resource('surat',SuratController::class);
Route::resource('pendahuluan',PendahuluanController::class)->middleware('auth');
Route::resource('penelitian',PenelitianController::class)->middleware('auth');
Route::resource('user',UserController::class);
