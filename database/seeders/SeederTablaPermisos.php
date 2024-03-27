<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Permission;


class SeederTablaPermisos extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $this->createRolesPermissions();
    $this->createUser();
    $this->viewreportes();
  }

  public function createRolesPermissions()
  {
    foreach (['ver-rol', 'crear-rol', 'editar-rol', 'borrar-rol'] as $permiso) {
      Permission::create(['name' => $permiso]);
    }
    $this->command->info('success');
  }

  public function createUser()
  {
    foreach(['ver-usuario','crear-usuario','editar-usuario','borrar-usuario']as $permiso){
      Permission::create(['name'=>$permiso]);
    }
    $this->command->info('success');
  }

  public function viewreportes()
  {
    foreach(['ver-reporte','crear-reporte','editar-reporte','borra-reporte','descargar-reporte'] as $permiso){
      Permission::create(['name'=>$permiso]);
    }
    $this->command->info('creado roles de reportes succes!!');
    }
  }

