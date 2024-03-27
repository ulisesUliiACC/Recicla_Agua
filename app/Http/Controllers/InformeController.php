<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
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
    public function viewSolicitud(){
      return view('monitores.reportes.solicitud_Analisis_vista');
    }
    public  function solicitud(): \Illuminate\Http\Response
    {
      $pdf = Pdf::loadView('monitores.reportes.solicitud_Analisis_PDF')
        ->setPaper('letter', 'portrait');
      return $pdf->stream();
    }

    public function informe()
    {
      return view('monitores.informes.index');
    }
    public function informeView()
    {
      return view('monitores.informes.informe_de_resultados');
    }

    public function informePDF(Request $resquest){
        $pdf = Pdf::loadView('monitores.informes.informe_de_Resultados_pdf')
          ->setPaper('letter','portrait');
        return $pdf->stream();


    }

  public function InyectorInfo(Request $request)
  {
    $clave = $request->input('clave');
    $empresa = Empresa::where('clave', $clave)
      ->select('atencion','industria','direccion','numero',)
      ->first();
    // Devolver los datos de la empresa en formato JSON
    return response()->json(['empresa' => $empresa]);
  }


}
