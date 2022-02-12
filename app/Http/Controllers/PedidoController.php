<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
class PedidoController extends Controller
{
    public function index(){
        
    $pedido = Pedido::get();
        return [
            'Pedidos' =>$pedido
        ];
    }



    public function store (Request $request){
    $pedido = new Pedido();
       
    $pedido->fecha_pedido = $request->fechaPedido;
    $pedido->total_venta = $request->totalVenta;
       
       
         

    $pedido->save();
    }

    public function update(Request $request) {
    $pedido = Pedido::findOrFail($request->id);
    $pedido->fecha_pedido = $request->fechaPedido;
    $pedido->total_venta = $request->totalVenta;


    $pedido->save();
        
    }

    public function destroy(Request $request) {
    $pedido = Pedido::findOrFail($request->id);    
    $pedido->delete();
    }
}
