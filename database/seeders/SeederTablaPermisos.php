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
  }

  public function createRolesPermissions()
  {
    foreach (['ver-rol', 'crear-rol', 'editar-rol', 'borrar-rol'] as $permiso) {
      Permission::create(['name' => $permiso]);
    }

  }

  public function createUser()
  {
    foreach(['ver-usuario','crear-user','edit-user','borrar-user']as $permiso){
      Permission::create(['name'=>$permiso]);
    }
  }
}
