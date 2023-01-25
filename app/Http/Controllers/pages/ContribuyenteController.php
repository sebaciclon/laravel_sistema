<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contribuyente;
use App\Models\Estado_civil;
use App\Models\Tipo_dni;
use Illuminate\Support\Facades\Hash;

class ContribuyenteController extends Controller {

    public function index() {
        $contribuyentes = contribuyente::all();
        $estadosCivil = Estado_civil::all();
        $tiposDni = Tipo_dni::all();
        return view('content.pages.contribuyentes', ['contribuyentes' => $contribuyentes, 'estados'=>$estadosCivil, 'tipos'=>$tiposDni]);
    }

    public function create() {
        $estadosCivil = Estado_civil::all();
        $tiposDni = Tipo_dni::all();
        return view('content.pages.contribuyentes-crear', ['estados'=>$estadosCivil, 'tipos'=>$tiposDni]);
    }

    public function store(Request $request) {
        /*$validador =$request->validate([ 
            'tipo_dni_id' => required',
            'nro_documento' => required',
            'estado_civil_id' => required',
            'cuit' => required',
            'ingresos_brutos' => required',
            'nombre' => 'required',
            'apellido' => required',
            'fecha_nacimiento => required',
            
        ]);*/
        
        $contribuyente = new contribuyente();
        $contribuyente->tipo_dni_id = $request->tipo_dni_id;
        $contribuyente->nro_documento = $request->nro_documento;
        $contribuyente->estado_civil_id = $request->estado_civil_id;
        $contribuyente->cuit = $request->cuit;
        $contribuyente->ingresos_brutos = $request->ingresos_brutos;
        $contribuyente->nombre = $request->nombre;
        $contribuyente->apellido = $request->apellido;
        $contribuyente->fecha_nacimiento = $request->fecha_nacimiento;
        $contribuyente->telefono = $request->telefono;
        $contribuyente->conyuge = $request->conyuge;
        $contribuyente->dni_conyuge = $request->dni_conyuge;

        $contribuyente->save();

        return redirect()->route('pages-contribuyentes');
    }

    public function show($id) {
        $contribuyente = contribuyente::find($id);
        $estadosCivil = Estado_civil::all();
        $tiposDni = Tipo_dni::all();
        return view('content.pages.contribuyente-mostrar', ['contribuyente' => $contribuyente, 'estados'=>$estadosCivil, 'tipos'=>$tiposDni]);
    }

    public function update(Request $request) {
        $contribuyente = contribuyente::find($request->contribuyente_id);
        $contribuyente->tipo_dni_id = $request->tipo_dni_id;
        $contribuyente->nro_documento = $request->nro_documento;
        $contribuyente->estado_civil_id = $request->estado_civil_id;
        $contribuyente->cuit = $request->cuit;
        $contribuyente->ingresos_brutos = $request->ingresos_brutos;
        $contribuyente->nombre = $request->nombre;
        $contribuyente->apellido = $request->apellido;
        $contribuyente->fecha_nacimiento = $request->fecha_nacimiento;
        $contribuyente->telefono = $request->telefono;
        $contribuyente->conyuge = $request->conyuge;
        $contribuyente->dni_conyuge = $request->dni_conyuge;
        $contribuyente->save();

        return redirect()->route('pages-contribuyentes');
    }

    public function destroy ($id) {
        $contribuyente = contribuyente::find($id);
        $contribuyente->delete();
        return redirect()->route('pages-contribuyentes');
    }
}