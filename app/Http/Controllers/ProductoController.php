<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        
        $producto = Producto::get();
            return [
                'Productos' =>$producto
            ];
        }
    
    
    
        public function store (Request $request){
        $producto = new Producto();
           
        $producto->cantidad = $request->cantidad;
        $producto->nombre = $request->nombre;
        $producto->medida = $request->medida;
        $producto->categoria = $request->categoria;
           
           
             
    
        $producto->save();
        }
    
        public function update(Request $request) {
        $producto = Producto::findOrFail($request->id);
        $producto->cantidad = $request->cantidad;
        $producto->nombre = $request->nombre;
        $producto->medida = $request->medida;
        $producto->categoria = $request->categoria;
    
        $producto->save();
            
        }
    
        public function delete(Request $request) {
        $producto = Producto::findOrFail($request->id);    
        $producto->delete();
        }
}
