<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PesagemController;
use App\Http\Controllers\PersonController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');





    Route::get('/pesagens', [PesagemController::class, 'index'])->name('pesagens.index');


    //Route::post('/receive-name', [PersonController::class, 'store']);
    //Route::get('/view-name', [PersonController::class, 'show'])->name('person.show');


});

require __DIR__.'/auth.php';
