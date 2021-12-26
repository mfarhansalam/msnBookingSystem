<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\MemberController;

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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/member/login', [MemberController::class, 'login']) ;

Route::get('/member/register', [MemberController::class, 'register']) ;



Route::get('/dashboard', [CourtController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

/*Route::view('dashboard', 'dashboard')
    ->name('dashboard')
    ->middleware(['auth', 'verified']);*/