<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\funcionariosController;
use App\Http\Controllers\escalasController;


// Funcionarios

Route::get('/listaFuncionarios', [funcionariosController::class, "listaFuncionarios"])
    ->name('listaFuncionarios');

Route::get('/deletarFuncionario', [funcionariosController::class, "deletarFuncionario"])
    ->name('deletarFuncionario');

Route::get('/formularioFuncionarios', [funcionariosController::class, "formularioFuncionarios"])
    ->name('formularioFuncionarios');

Route::post('/editarFuncionario', [funcionariosController::class, "editarFuncionario"])
    ->name('editarFuncionario');

Route::get('/formularioEditarFuncionarios', [funcionariosController::class, "formularioEditarFuncionarios"])
    ->name('formularioEditarFuncionarios');

Route::post('/criarFuncionarios', [FuncionariosController::class, 'criarFuncionarios'])
->name('criarFuncionarios');


    

// Escalas
Route::get('/listaEscalas', [escalasController::class, "listaEscalas"])
    ->name('listaEscalas');

Route::get('/deletarEscala', [escalasController::class, "deletarEscala"])
    ->name('deletarEscala');

Route::get('/formularioEscala', [escalasController::class, "formularioEscala"])
    ->name('formularioEscala');

Route::post('/editarEscala', [escalasController::class, "editarEscala"])
    ->name('editarEscala');

Route::get('/formularioEditarEscala', [escalasController::class, "formularioEditarEscala"])
    ->name('formularioEditarEscala');


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
