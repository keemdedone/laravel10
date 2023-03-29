<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Framework;

Route::resource('framework', Framework::class);

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

// Route::get('/framework', [Framework::class, 'index'])->name('framework');

// Route::get('/framework/create', [Framework::class, 'create'])->name('framework.create');

// Route::get('/framework/edit/{id}', [Framework::class, 'edit'])->name('framework.edit');
