<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleCompraController extends Controller
{
    public function index(){
        
        $detallecompra = DetalleCompra::get();
        return [
            'DetalleCompras' => $detallecompra
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

    public function delete(Request $request) {
        $detallecompra = detalleCompra::findOrFail($request->id);    
        $detallecompra->delete();
    }
}
