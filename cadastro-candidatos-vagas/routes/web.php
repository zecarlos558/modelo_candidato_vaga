<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VagaController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->middleware('guest')->name('index');

Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('candidato')->middleware('auth')->group(function () {
    Route::controller(CandidatoController::class)->group(function () {
            Route::get('/', 'index')->name('candidato.index');
            Route::get('/show/{id}', 'show')->name('candidato.show');
            Route::get('/create', 'create')->name('candidato.create');
            Route::post('/store', 'store')->name('candidato.store');
            Route::get('/edit/{id}', 'edit')->name('candidato.edit');
            Route::post('/update/{id}', 'update')->name('candidato.update');
            Route::delete('/{id}', 'destroy')->name('candidato.delete');
    });
});

Route::prefix('vagas')->middleware('auth')->group(function () {
    Route::controller(VagaController::class)->group(function () {
            Route::get('/', 'index')->name('vaga.index');
            Route::get('/show/{id}', 'show')->name('vaga.show');
            Route::get('/disponivel', 'disponivel')->name('vaga.disponivel');
            Route::get('/create', 'create')->name('vaga.create');
            Route::post('/store', 'store')->name('vaga.store');
            Route::get('/edit/{id}', 'edit')->name('vaga.edit');
            Route::post('/update/{id}', 'update')->name('vaga.update');
            Route::delete('/{id}', 'destroy')->name('vaga.delete');
    });
});

require __DIR__.'/auth.php';
