<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\FichaTecnicaController;


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



/* PROFESSOR */
Route::get('/professor', [ProfessorController::class, 'index'])->name('professor.index');

Route::put('/professor/{id}', [ProfessorController::class, 'update'])->name('professor.update');
Route::get('/professor/cadastrar', [ProfessorController::class, 'create'])->name('professor.create');
Route::post('/professor/cadastrar', [ProfessorController::class, 'store'])->name('professor.store');
Route::get('/professor/{id}',[ProfessorController::class, 'show'])->name('professor.show');

Route::get('/professor/{id}/edit', [ProfessorController::class, 'edit'])->name('professor.edit');

/* FICHA TÉCNICA */
Route::get('/cadastrarFT1', [FichaTecnicaController::class,'index']);

Route::get('/cadastrarFT', function () {
    return view('cadastrarFT');
});

?>
