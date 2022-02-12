<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
class CompraController extends Controller
{
    public function index(){
        
        $compra = Compra::get();
        return [
            'Compras' => $compra
        ];
    }



    public function store (Request $request){
       $compra = new Compra();
       
       $compra->fecha_compra = $request->fechaCompra;
       $compra->costo_compra = $request->costoCompra;
       $compra->nombre_proveedor = $request->nombreProveedor;
       
         

       $compra->save();
    }

    public function update(Request $request) {
        $compra = Compra::findOrFail($request->id);
        $compra->fecha_compra = $request->fechaCompra;
       $compra->costo_compra = $request->costoCompra;
       $compra->nombre_proveedor = $request->nombreProveedor;


        $compra->save();
        
    }

    public function destroy(Request $request) {
        $compra = Compra::findOrFail($request->id);    
        $compra->delete();
    }
}
