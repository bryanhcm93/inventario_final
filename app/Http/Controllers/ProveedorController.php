<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Proveedor;
class ProveedorController extends Controller
{

    public function index(){
        
        $proveedor = Proveedor::all();
        return Inertia::render('Proveedores',['Proveedores' => $proveedor]);

        // return [
        //     'Proveedores' => $proveedor
        // ];
    }

    public function indexData(){
        
        $producto = Producto::all();
       
            return [
                'Proveedores' =>$proveedor
            ];
        }



    public function store (Request $request){
       $proveedor = new Proveedor();
       $proveedor->nit_proveedor = $request->nitProveedor;
       $proveedor->nombre_proveedor = $request->nombreProveedor;
       $proveedor->telefono_proveedor = $request->telefonoProveedor;
       $proveedor->direccion_proveedor = $request->direccionProveedor;
       
         

       $proveedor->save();
    }

    public function update(Request $request) {
        $proveedor = Proveedor::findOrFail($request->id);
        $proveedor->nit_proveedor = $request->nitProveedor;
        $proveedor->nombre_proveedor = $request->nombreProveedor;
       $proveedor->telefono_proveedor = $request->telefonoProveedor;
       $proveedor->cargo_proveedor = $request->cargoProveedor;


        $proveedor->save();
        
    }

    public function destroy(Request $request) {
        $proveedor = Proveedor::findOrFail($request->id);    
        $proveedor->delete();
    }
}
