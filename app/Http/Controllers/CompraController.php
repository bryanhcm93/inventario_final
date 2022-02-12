<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       
         

       $compra->save();
    }

    public function update(Request $request) {
        $compra = Compra::findOrFail($request->id);
        $compra->fecha_compra = $request->fechaCompra;
       $compra->costo_compra = $request->costoCompra;


        $compra->save();
        
    }

    public function delete(Request $request) {
        $compra = Compra::findOrFail($request->id);    
        $compra->delete();
    }
}
