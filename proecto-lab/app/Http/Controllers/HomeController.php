<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //dd(Role::all(), Permission::all());

        //Role::create(['name' => 'visitante']); Crecion de rol visitante
        //Permission::create(['name' => 'Ver Boton Pagina']); crecion de permiso ver boton de pagina
        //Role::first()->givePermissionTo(Permission::first()); Creación de la relación entre el primer permiso creado y el primer rol creado
        //User::first()->assignRole('administrador'); Asignamos el rol ADMINISTRADOR al primer usuario
        //User::find('2')->assignRole('visitante'); Asignamos el rol VISITANTE al usuario con ID 2

        //User::find('2')->givePermissionTo('Ver Boton Pagina'); Se asigna el permiso 'Ver Boton Pagina' en el usuario con ID 2

        //dd(User::find('1')->getAllPermissions());

        return view('home');
    }
}
