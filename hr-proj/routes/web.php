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
    })->name('/dashboard');
});

//PROJECT MANAGEMENT
Route::get('/projects', function () {
    return view('projects');
})->name('/projects');

 Route::get('/approval', function () {
    return view('approval');
})->name('/approval');


//ASSET MANAGMENT//
Route::get('/assettracking', function () {
    return view('assettracking');
})->name('/assettracking');

Route::get('/store', function () {
    return view('store');
})->name('/store');

Route::get('/tracker', function () {
    return view('tracker');
})->name('/tracker');


//WAREHOUSE
Route::get('/managementcontrol', function () {
    return view('managementcontrol');
})->name('/managementcontrol');

Route::get('/warehouselayout', function () {
    return view('warehouselayout');
})->name('/warehouselayout');

Route::get('/shipping', function () {
    return view('shipping');
})->name('/shipping');


//APPROVAL
Route::get('/performance', function () {
    return view('performance');
})->name('/performance');

Route::get('/forecasting', function () {
    return view('forecasting');
})->name('/forecasting');