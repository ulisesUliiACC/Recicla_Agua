<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MonitoresUserController extends Controller
{
    public function index()
    {
      $users= User::paginate(5);
      return view ('monitores.index',compact('users'));
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
