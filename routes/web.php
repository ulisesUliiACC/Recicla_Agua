<?php

use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoresUserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/monitoreo/empresas',[EmpresasController::class,'index'])->name('empresas.index');
Route::get('/monitoreo/empresas/create',[EmpresasController::class,'create'])->name('empresas.create');
Route::get('/minitoreo/usuarios',[MonitoresUserController::class,'index'])->name('monitores.index');


Route::get('/minitoreo/usuarios/nuevo',[MonitoresUserController::class,'create'])->name('monitores.create');
require __DIR__.'/auth.php';
