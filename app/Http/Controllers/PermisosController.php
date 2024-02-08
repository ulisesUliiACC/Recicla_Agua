<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
      $this->validate($request, [
        'name' => 'required|unique:permissions,name,NULL,id,guard_name,' . $request->guard_name,
        'guard_name' => 'required',
        'description' => 'nullable',
      ]);

      $permission = Permission::create($request->all());
      $data = [
        'success' => true,
        'message' => 'Permiso creado con éxito.',
        'permission' => $permission, // Opcional: incluye el permiso creado
      ];
      return response()->json($data);
    }
}
