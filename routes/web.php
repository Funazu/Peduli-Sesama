<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaksinController;

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

Route::get('/auth/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'loginPost']);
Route::post('/auth/logout', [AuthController::class, 'logout']);

// Profile
Route::get('/profile', [ProfileController::class, 'index'])->name('warga')->middleware('warga');


// Vaksin
Route::get('/vaksin/register', [VaksinController::class, 'daftarVaksin'])->middleware('warga');
Route::post('/vaksin/register', [VaksinController::class, 'postDaftarVaksin'])->middleware('warga');

// Route::get('/middleware-test', function() {
//     return view('middleware-test');
// })->middleware('auth');
