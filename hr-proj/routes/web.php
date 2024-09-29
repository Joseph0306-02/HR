<?php

use App\Http\Controllers\Welcomecontroller;
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
Route::get('/register', [Welcomecontroller::class, 'register'])->name(name: 'register');
Route::get('/', [Welcomecontroller::class, 'dashboard'])->name('dashboard');
Route::get('/logins', [Welcomecontroller::class, 'logins'])->name('logins');
Route::get('/signup', [Welcomecontroller::class, 'signup'])->name(name: 'signup');
Route::get('/forgot-passwords', [Welcomecontroller::class, 'forgotpasswords'])->name(name: 'forgot-passwords');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
