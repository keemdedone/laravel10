<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Framework;
use App\Http\Controllers\User;
use App\Http\Controllers\Mail;

Route::resource('framework', Framework::class);
Route::resource('user', User::class);
Route::resource('mail', Mail::class);

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/login', function () {
    return view('main-component.auth-login');
})->name('login');

Route::get('/register', function () {
    return view('main-component.auth-register');
})->name('register');

Route::post('/users/login', [User::class, 'login'])->name('user.login');
Route::post('/users/logout', [User::class, 'logout'])->name('user.logout');

Route::post('/mail/send', [Mail::class, 'sendEmail'])->name('mail.send');
