<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    // En el modelo app/Models/Empresa.php
protected $table = 'empresas';

    protected $fillable = [
      'clave',
      'industria',
      'monitoreo',
      'descarga',
      'horas',
      'tipo',
      'descarga_a',
      'DBO5',
      'DQO',
      'SST',
      'ST',
      'GYA',
      'SAAM',
      'NAK',
      'NOK',
      'NTK',
      'fenol',
      'color',
      'metales',
      'CN',
      'CR_6',
      'CN_6',
      'P_T',
      'Cu',
      'Ni',
      'Cd',
      'Zn',
      'Pb',
      'Cr',
      'Fe',
      'Ag',
      'Al',
      'Hg',
      'As',
      'Se',
      'B',
      'Sn',
      'coliformes_fecales_nmp',
      'coliformes_totales',
      'ph',
      'SDT',
      'SSe',
      'conductividad',
      'alcalinidad',
      'giro_ind',
      'direccion',
      'telefono',
      'atencion',
      //imagen del croquis de la empresas
      'imagen'
    ];

}
