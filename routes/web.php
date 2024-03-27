<?php

use App\Http\Controllers\EmpresasController;

use App\Http\Controllers\InformeController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoresUserController;
use App\Http\Controllers\UserController;


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


Route::middleware('auth')->group(function () {
  Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
  Route::post('/admin/users/create', [UserController::class, 'store'])->name('users.store');
  Route::get('/admin/users/{id}/edit/', [UserController::class, 'edit'])->name('users.edit');
  Route::put('/admin/users/{id}/update/', [UserController::class, 'update'])->name('users.update');
  Route::delete('/admin/users/{id}/destroy/', [UserController::class, 'destroy'])->name('users.destroy');


  Route::get('/monitoreo/empresas',[EmpresasController::class,'index'])->name('empresas.index');
  Route::get('/monitoreo/empresas/create',[EmpresasController::class,'create'])->name('empresas.create');
  Route::get('/minitoreo/usuarios',[MonitoresUserController::class,'index'])->name('monitores.index');

  Route::get('/monitores/reportes',[EmpresasController::class,'reportes'])->name('monitores.reportes');
  Route::get('/monitores/croquis',[EmpresasController::class,'croquis'])->name('empresas.croquis');
  Route::post('/monitores/reportes/buscar', [EmpresasController::class, 'buscar'])->name('buscar.empresas');


  /*  Ruta de roles  */
  Route::get('/admin/roles',[RolController::class,'index'])->name('roles.index');
  Route::get('/admin/roles/create',[RolController::class,'create'])->name('roles.create');
  Route::post('/admin/roles/create',[RolController::class,'store'])->name('roles.store');
  Route::get('/minitoreo/usuarios/nuevo',[MonitoresUserController::class,'create'])->name('monitores.create');
  Route::get('/roles/{id}/edit',[RolController::class,'edit'])->name('roles.edit');
  Route::put('/admin/roles/{id}/update',[RolController::class,'update'])->name('roles.update');
  Route::delete('/roles/{id}/destroy',[RolController::class,'destroy'])->name('roles.destroy');

  /* Ruta de Permisos*/

  Route::get('admin/permisos',[PermisosController::class,'index'])->name('permisos.index');
  Route::post('/admin/permisos/create',[PermisosController::class,'store'])->name('permisos.store');
  Route::delete('admin/permisos/{id}/destroy',[PermisosController::class,'detroy'])->name('permisos.destroy');

  /* Reportes && solicitudes */

  Route::get('/monitoreo/reportes/solicitud',[InformeController::class,'solicitud'])->name('solicitud');
  Route::get('/monitoreo/reportes/solcitud',[InformeController::class,'viewSolicitud'])->name('solicitud.viewSolicitud');

  Route::get('monitoreo/reportes/informe',[InformeController::class,'informe'])->name('reporte.informe');
  Route::get('monitoreo/reportes/informe/create',[InformeController::class,'informeView'])->name('reporte.informeView');

  Route::post('monitoreo/reportes/informe/buscar',[InformeController::class,'InyectorInfo'])->name('buscar.InyectorInfo');
});


require __DIR__.'/auth.php';



;
