<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Producto;
class ProductoController extends Controller
{
    public function index(){
        
        $producto = Producto::all();
        return Inertia::render('Productos',['Productos'=>$producto]);
            // return [
            //     'Productos' =>$producto
            // ];
        }
        public function indexData(){
        
            $producto = Producto::all();
           
                return [
                    'Productos' =>$producto
                ];
            }

            public function getProducto(Request $request)
            {
        
              $producto=Producto::select('id','nombre','precio')
               ->get();
               return[
        
            'Productos'=>$producto
        ];
        
        
            }

            public function getProductoData(Request $request)
            {
        
              $producto=Producto::select('id','cantidad','nombre','medida','categoria','precio')
           
              ->where('id',$request->id)
               ->get();
               return[
        
            'Productos'=>$producto
        ];
        
        
            }
    
    
    
        public function store (Request $request){
        $producto = new Producto();
           
        $producto->cantidad = $request->cantidad;
        $producto->nombre = $request->nombre;
        $producto->medida = $request->medida;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;   
           
             
    
        $producto->save();
        }
    
        public function update(Request $request) {
        $producto = Producto::findOrFail($request->id);
        $producto->cantidad = $request->cantidad;
        $producto->nombre = $request->nombre;
        $producto->medida = $request->medida;
        $producto->categoria = $request->categoria;
        $producto->precio = $request->precio;
    
        $producto->save();
            
        }
       






    
        public function destroy(Request $request) {
        $producto = Producto::findOrFail($request->id);    
        $producto->delete();
        }
}

