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
      'industria',
      'clave',
      'monitoreo',
      'descarga',
      'horas',
      'tipo',
      'descarga_a',
      'giro',
      'direccion',
      'numero',
      'atencion',
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
    ];

}
