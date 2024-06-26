<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agregamos
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Spatie\Permissions\Models\Permission as ContractsPermission;


class RolController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-rol|crear-rol|editar-rol|borrar-rol',['only'=>['index']]);
         $this->middleware('permission:crear-rol', ['only' => ['create','store']]);
         $this->middleware('permission:editar-rol', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-rol', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $permissions = Permission::all();
      $roles = Role::with('permissions')->get();
      // Or any other way to fetch permissions
      return view('roles.index', compact('permissions','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('roles.crear',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|unique:roles,name',
                'permission' => 'required|array',
            ]);

            // Crear el nuevo rol
            $role = Role::create(['name' => $request->input('name')]);

            // Obtener los IDs de los permisos desde la solicitud
            $permissionIds = $request->input('permission');

            // Asignar manualmente los permisos al rol en la tabla intermedia
            foreach ($permissionIds as $permissionId) {
                DB::table('role_has_permissions')->insert([
                    'role_id' => $role->id,
                    'permission_id' => $permissionId,
                ]);
            }

            return redirect()->route('roles.index')->with('success', 'Rol creado con éxito.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Manejar excepción de validación
            return redirect()->route('roles.index')->with('error', 'Error al crear el rol: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Manejar otras excepciones
            return redirect()->route('roles.index')->with('error', 'Error al crear el rol: ' . $e->getMessage());
        }
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $role = Role::find($id);
    $permissions = Permission::all();
    $rolePermissions = $role->permissions->pluck('id')->toArray();

    return view('roles.index', compact('role', 'permissions', 'rolePermissions'));
}

public function update(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required',
        'permission' => 'required|array',
    ]);

    $role = Role::find($id);
    $role->name = $request->input('name');
    $role->save();

    // Obtén los IDs de permisos desde el formulario
    $permissionIds = $request->input('permission');

    // Sincroniza los permisos del rol
    $existingPermissionIds = Permission::whereIn('id', $permissionIds)->pluck('id')->toArray();
    $role->syncPermissions($existingPermissionIds);

    return redirect()->route('roles.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index');
    }
}
