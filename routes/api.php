<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesagemController;

use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');





Route::get('/pesagens', [PesagemController::class, 'index'])->name('pesagens.index');
Route::post('/receive-name', [PersonController::class, 'store']);
Route::post('/receive-name', [PesagemController::class, 'receiveName']);
