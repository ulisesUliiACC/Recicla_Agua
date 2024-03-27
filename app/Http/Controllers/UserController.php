<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Permission;

use Illuminate\Validation\Rules;

use Spatie\Permission\Traits\HasRoles;
class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-usuario|crear-usuario|editar-usuario|borrar-usuario',['only'=>['index']]);
         $this->middleware('permission:crear-usuario', ['only' => ['create','store']]);
         $this->middleware('permission:editar-usuario', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-usuario', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
{
    $users = User::with('roles')->paginate(10);
    $permissions = Permission::all();
    $roles = Role::pluck('name', 'name')->all();
    return view('monitores.index', compact('users', 'roles', 'permissions'));
}


public function store(Request $request)
{
    // Añade este dd para verificar que los datos lleguen al controlador
    //dd($request->all());
    $request->validate([
        'name' => 'required|string',
        'username' => 'required|string|unique:users',
        'telefono' => 'required|min:10|max:10',
        'estado' => 'boolean',
        'password' => 'required|string|min:8',
        'roles' => 'required|array',
    ]);
    // Añade este dd para verificar que se pasa la validación
    //dd('Se pasa la validación');
   // ...
    $input = $request->all();
    $input['password'] = Hash::make($input['password']);
    $input['estado'] = $request->input('estado') == '1' ? true : false;

    $user = User::create($input);

    $roles = $request->input('roles');
    $validRoles = Role::whereIn('name', $roles)->pluck('name');
    $user->assignRole($validRoles);

    return redirect()->route('monitores.index')->with('success', 'Usuario creado con éxito.');

}
    public function update(Request $request, $id)
    {
      $request->validate([
        'name' => 'required|string',
        'username' => 'required|string|unique:users',
        'telefono' => 'required|min:10|max:10',
        'estado' => 'boolean',
        'password' => 'required|string|min:8',
        'roles' => 'required|array',
    ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
        ->with('success', 'Usuario modificado con éxito');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'Usuario eliminado con éxito');
    }

}
