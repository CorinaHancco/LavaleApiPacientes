<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        return Paciente::all();
    }

    public function store(Request $request){    // el store siempre guarda datos
       $request->validate([
         'nombre'=>'required',
         'apellido'=>'required',
         'edad'=>'required',
         'tipo_sangre'=>'required',
         'enfermedad'=>'required'
       ]);
       Paciente::create($request->all());

       return response()->json([
           'res'=>true,
           'msg'=>'Paciente Registrado Correctamente'
       ]);
    }
    public function show(Paciente $paciente){
        //return $paciente;
        return response()->json([
            'res'=>true,
            'paciente'=>$paciente
        ]);
    }
    
    public function update(Request $request, Paciente $paciente){
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'edad'=>'required',
            'tipo_sangre'=>'required',
            'enfermedad'=>'required'
          ]);
        $paciente -> update($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'Paciente Actualizado Correctamente'
        ]);
    }

    public function destroy(Paciente $paciente){
         $paciente->delete();
         return response()->json([
             'res'=>true,
             'msg'=>'Paciente Eliminado Correctamente'
         ]);
    }
}
