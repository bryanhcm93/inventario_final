<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallePedido;

class DetallePedidoController extends Controller
{
    public function index(){
        
        $detallepedido = DetallePedido::get();
        return [
            'DetallePedidos' => $detallepedido
        ];
    }



    public function store (Request $request){
       $detallepedido = new DetallePedido();
       
       $detallepedido->cantidad = $request->cantidad;
       $detallepedido->precio = $request->precio;
       $detallepedido->estado_pedido = $request->estadoPedido;
       
         

       $detallepedido->save();
    }

    public function update(Request $request) {
        $detallepedido = DetallePedido::findOrFail($request->id);
    
        $detallepedido->cantidad = $request->cantidad;
       $detallepedido->precio = $request->precio;
       $detallepedido->estado_pedido = $request->estadoPedido;
          

        $detallepedido->save();
        
    }

    public function destroy(Request $request) {
        $detallepedido = DetallePedido::findOrFail($request->id);    
        $detallepedido->delete();
    }
}
