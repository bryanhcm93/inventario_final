<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
class ProveedorController extends Controller
{
    public function index(){
        
        $proveedor = Proveedor::get();
        return [
            'Proveedors' => $proveedor
        ];
    }



    public function store (Request $request){
       $proveedor = new Proveedor();
       
       $proveedor->nombre_empleado = $request->nombreEmpleado;
       $proveedor->telefono_empleado = $request->telefonoEmpleado;
       $proveedor->nombre_cargo = $request->nombreCargo;
       
         

       $proveedor->save();
    }

    public function update(Request $request) {
        $proveedor = Proveedor::findOrFail($request->id);
        $proveedor->nombre_empleado = $request->nombreEmpleado;
       $proveedor->telefono_empleado = $request->telefonoEmpleado;
       $proveedor->nombre_cargo = $request->nombreCargo;


        $proveedor->save();
        
    }

    public function delete(Request $request) {
        $proveedor = Proveedor::findOrFail($request->id);    
        $proveedor->delete();
    }
}
