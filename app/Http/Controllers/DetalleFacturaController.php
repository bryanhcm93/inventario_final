<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleFactura;
class DetalleFacturaController extends Controller
{
    public function index(){
        
        $detallefactura = DetalleFactura::get();
        return [
            'DetalleFacturas' => $detallefactura
        ];
    }



    public function store (Request $request){
       $detallefactura = new DetalleFactura();
       
       $detallefactura->cantidad = $request->cantidad;
       $detallefactura->precio = $request->precio;
       $detallefactura->descripcion = $request->descripcion;
       $detallefactura->estado_pedido = $request->estadoPedido;
       $
         

       $detallefactura->save();
    }

    public function update(Request $request) {
        $detallefactura = DetalleFactura::findOrFail($request->id);
    
        $detallefactura->cantidad = $request->cantidad;
       $detallefactura->precio = $request->precio;
       $detallefactura->descripcion = $request->descripcion;
       $detallefactura->estado_pedido = $request->estadoPedido;
          

        $detallefactura->save();
        
    }

    public function delete(Request $request) {
        $detallefactura = DetalleFactura::findOrFail($request->id);    
        $detallefactura->delete();
    }
}
