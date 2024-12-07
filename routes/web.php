<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::view('/', 'dashboard')->name('dashboard');
Route::view('dashboard', 'dashboard')
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/info', function (){
    return view('info',[
        "title" => "info"
    ]);
    // routes/web.php
})->name('info');
//ini untuk nendang aja
Route::get('/pembayaran', function (){
  return redirect('/info');
});

Route::post('/pembayaran', [\App\Http\Controllers\InfoController::class, 'pembayaran'])->name('pembayaran');
require __DIR__.'/auth.php';

// routes/web.php
Route::get('/info', [\App\Http\Controllers\InfoController::class, 'index']);

Route::resource('/daftar', \App\Http\Controllers\DaftarController::class);
//page admin
Route::middleware(['admin'])->group(function (){
    Route::get('/pageAdmin', [\App\Http\Controllers\AdminController::class , 'index'])->name('pageAdmin');
    Route::post('/admin', \App\Livewire\Admin::class)->name('admin');
    Route::get('/UserDaftar', [\App\Http\Controllers\UserDaftarController::class, 'index']);
    Route::post('/UserDaftar/{id}', [\App\Http\Controllers\UserDaftarController::class, 'store'])->name('user.daftar');
    Route::get('/item/{id}', [\App\Http\Controllers\UserDaftarController::class, 'detail'])->name('item.detail');
    Route::delete('UserDelete/{id}', [\App\Http\Controllers\UserDaftarController::class, 'destroy'])->name('user.delete');
});




