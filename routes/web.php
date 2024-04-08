<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
|
|El authmiddleware garantiza que sólo los usuarios que hayan iniciado sesión puedan acceder a la ruta.
|
*/
/*
|--------------------------------------------------------------------------
| Verified
|--------------------------------------------------------------------------
|
|El verifiedmiddleware se utilizará si decide habilitar la verificación por correo electrónico 
|
*/


Route::view('/', 'welcome')->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/chirps', [ChirpController::class, 'index'])->middleware(['auth'])->name('chirp.index');

require __DIR__.'/auth.php';
