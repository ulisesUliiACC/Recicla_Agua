<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Parametro;
class InformeController extends Controller
{
    // vista de control de informes

    public function index()
    {

      return view ('monitores.informes.reportes');

    }

    public  function solicitud(): \Illuminate\Http\Response
    {
      $pdf = Pdf::loadView('monitores.reportes.solicitud_Analisis')
        ->setPaper('letter', 'portrait');
      return $pdf->stream();
    }




}
