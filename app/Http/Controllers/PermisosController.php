<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermisosController extends Controller
{
    public function index(){
      $permissions = Permission::all();
      return view('permisos.index',compact('permissions'));
    }

  /**
   * @throws ValidationException
   */
  public function store(Request $request)
  {
    try {
      $request->validate([
        'name' => 'required|unique:permissions,name',
      ]);

      Permission::create(['name' => $request->name]);

      return redirect()->back()->with('success', 'Permiso creado con éxito.');
    } catch (ValidationException $e) {
      return redirect()->back()->withErrors($e->validator->errors())->withInput();
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Error al crear el permiso: ' . $e->getMessage());
    }
  }
  public function  destroy($id){
      DB::table("roles")->where('id',$id)->delete();
      return redirect()->route('permisos.index');
  }
}
