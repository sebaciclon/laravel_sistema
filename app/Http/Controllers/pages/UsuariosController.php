<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller {

    public function index() {
        $usuarios = User::all();
        return view('content.pages.usuarios', ['usuarios' => $usuarios]);
    }

    public function create() {
        return view('content.pages.usuarios-crear');
    }

    public function store(Request $request) {
        $validador =$request->validate([ 
            'nombre' => 'required',
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);
        
        $user = new User();
        $user->name = $request->nombre;
        $user->email =$request->correo;
        $user->password = Hash::make($request->contraseña);
        $user->save();

        return redirect()->route('pages-usuarios');
    }

    public function show($id) {
        $usuario = User::find($id);
        return view('content.pages.usuario-mostrar', ['usuario' => $usuario]);
    }

    public function update(Request $request) {
        $usuario = User::find($request->usuario_id);
        $usuario->name = $request->nombre;
        $usuario->email =$request->correo;
        if(!empty($request->contraseña_nueva))
          $usuario->password = Hash::make($request->contraseña_nueva);
        $usuario->save();

        return redirect()->route('pages-usuarios');
    }

    public function destroy ($id) {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('pages-usuarios');
    }
}