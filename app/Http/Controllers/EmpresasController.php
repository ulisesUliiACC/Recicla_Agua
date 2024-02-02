<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
class EmpresasController extends Controller
{
    //
    public function index(){
      $empresas = Empresa::paginate(1);
      return view ('empresas.index',compact('empresas'));
    }
    // vista de los reportes
    public function reportes()
    {
      return view ('monitores.reportes.reportes');
    }
    public function croquis()
    {
      return view ('empresas.croquis');
    }
}
