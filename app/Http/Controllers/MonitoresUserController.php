<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class MonitoresUserController extends Controller
{
    public function index()
    {
      $roleCount = Role::count();
      $roles = Role::pluck('name', 'name')->all();
      $users= User::paginate(5);
      return view ('monitores.index',compact('users','roles'));
    }

    public function create()
    {
      return view ('monitores.create');
    }

    public function store()
    {
      $monitorUser = new User();
    }
}
