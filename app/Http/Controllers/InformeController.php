<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformeController extends Controller
{
    // vista de control de informes

    public function index()
    {

      return view ('monitores.informes.reportes');

    }
}
