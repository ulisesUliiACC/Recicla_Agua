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
      'DBO5',
      'DQO',
      'SST',
      'GYA',
      'SAAM',
      'NAK',
      'NOK',
      'NTK',
      'FENOL',
      'COLOR',
      'METALES',
      'CN',
      'CR6',
    ];

}
