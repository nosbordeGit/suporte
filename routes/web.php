<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuporteController;
use Illuminate\Support\Facades\Route;

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
});

require __DIR__.'/auth.php';


Route::get('/suporte', [SuporteController::class, 'index'])->name('suporte.index')->middleware('auth');
Route::get('/chamado',[SuporteController::class,'chamado'])->name('suporte.chamado');
Route::post('/chamadoSave',[SuporteController::class,'chamadoSave'])->name('suporte.chamadoSave');
Route::get('/editar/{id}', [SuporteController::class, 'editar'])->name('suporte.edit');

