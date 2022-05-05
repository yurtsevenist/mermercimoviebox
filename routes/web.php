<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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


Route::get('/',[SiteController::class,'homePage'])->name('home');
Route::get('movie',[SiteController::class,'moviePage'])->name('movie');

Route::post('login',[UserController::class,'loginPost'])->name('loginPost');
Route::get('logout',[UserController::class,'logout'])->name('logout');
Route::middleware(['auth', 'verified'])->prefix('user')->group(function () {
    Route::get('{name}/profil',[UserController::class,'profilPage'])->name('profil');
    Route::post('profilUpdate',[UserController::class,'profilUpdate'])->name('profilUpdate');
});
