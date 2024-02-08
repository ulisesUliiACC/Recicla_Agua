<?php

namespace App\Http\Controllers;
use App\Models\Parametro;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresasController extends Controller
{
    //
    public function index(){
      $empresas = Empresa::paginate(25);
      return view ('empresas.index',compact('empresas'));
    }
    // vista de los reportes
    public function reportes()
    {
      $modal = false;
      $parametros = Parametro::all();
      return view ('monitores.reportes.reportes',compact('modal','parametros'));
    }

  public function buscar(Request $request)
  {
    $clave = $request->input('clave');


    $empresa = Empresa::where('clave', $clave)
      ->select('clave', 'horas', 'descarga_a', 'tipo', 'industria')
      ->first();

    // Devolver los datos de la empresa en formato JSON
    return response()->json(['empresa' => $empresa]);
  }




  public function croquis():view
    {
      $croquis = Empresa::all();
      return view ('empresas.croquis',compact('croquis'));
    }

}
