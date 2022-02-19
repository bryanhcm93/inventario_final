<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleCompra;
class DetalleCompraController extends Controller
{
  
    public function index(){
        
        $detallecompra = DetalleCompra::all();
        return Inertia::render('DetalleCompras',['DetalleCompras' => $detallecompra]);

      
    }
    public function indexData(){
        
        $detallecompra = DetalleCompra::all();
       
            return [
                'DetalleCompras' =>$detallecompra
            ];
        }



    public function store (Request $request){
       $detallecompra = new DetalleCompra();
       
       $detallecompra->cantidad_disponible = $request->cantidadDisponible;
       $detallecompra->fecha = $request->fecha;
       $detallecompra->descripcion = $request->descripcion;
       $detallecompra->precio = $request->precio;
         

       $detallecompra->save();
    }

    public function update(Request $request) {
        $detallecompra = DetalleCompra::findOrFail($request->id);
    
        $detallecompra->cantidad_disponible = $request->cantidadDisponible;
        $detallecompra->fecha = $request->fecha;
        $detallecompra->descripcion = $request->descripcion;
        $detallecompra->precio = $request->precio;
          

        $detallecompra->save();
        
    }

    public function destroy(Request $request) {
        $detallecompra = detalleCompra::findOrFail($request->id);    
        $detallecompra->delete();
    }
}
