<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    use HasFactory;
  protected $fillable = [
    'DBO_5',
    'DQO',
    'SST',
    'St',
    'G_y_A1',
    'G_y_A2',
    'G_y_A3',
    'G_y_A4',
    'G_y_A5',
    'G_y_A6',
    'G_y_A_PP',
    'SAAM',
    'NOK',
    'NAK',
    'NTK',
    'FENOL',
    'COLOR',
    'Cr+6',
    'CN',//CN-
    'PT',//P-T
    'Cu',
    'Ni',
    'Cd',
    'Zn',
    'Pb',
    'Cr',
    'Fe',
    'Ag',
    'Ai',
    'Hg',
    'As',
    'Se',
    'B',
    'Sn',
    'Coliformes_Fecales_NMP',
    'Coliformes_Totales',
    'pH',
    'SDT',
    'SSe',
    'conductividad',
    'Alcalinidas'
  ];


}
