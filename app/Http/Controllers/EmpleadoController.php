<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Empleado;
class EmpleadoController extends Controller
{
    public function index(){
        
        $empleado = Empleado::all();
return Inertia::render('Empleados',['Empleados'=>$empleado]);
        // return [
        //     'Empleados' => $empleado
        // ];
    }

    public function indexData(){
        
        $empleado = Empleado::all();
       
            return [
                'Empleados' =>$empleado
            ];
        }



    public function store (Request $request){
       $empleado = new Empleado();
       
       $empleado->nombre_empleado = $request->nombreEmpleado;
       $empleado->telefono_empleado = $request->telefonoEmpleado;
       $empleado->nombre_cargo = $request->cargoEmpleado;
       
         

       $empleado->save();
    }

    public function update(Request $request) {
        $empleado = Empleado::findOrFail($request->id);
        $empleado->nombre_empleado = $request->nombreEmpleado;
       $empleado->telefono_empleado = $request->telefonoEmpleado;
       $empleado->nombre_cargo = $request->cargoEmpleado;


        $empleado->save();
        
    }

    public function destroy(Request $request) {
        $empleado = Empleado::findOrFail($request->id);    
        $empleado->delete();
    }
}
