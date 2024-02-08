<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
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
    public function croquis():view
    {
      $croquis = Empresa::all();
      return view ('empresas.croquis',compact('croquis'));
    }
    public function altacroquis():view
    {



    }
}
