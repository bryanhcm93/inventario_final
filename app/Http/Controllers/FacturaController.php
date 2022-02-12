<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
class FacturaController extends Controller
{
    public function index(){
        
        $factura = Factura::get();
        return [
            'Facturas' => $factura
        ];
    }



    public function store (Request $request){
       $factura = new Factura();
       
       $factura->cantidad = $request->cantidad;
       $factura->precio = $request->precio;
       
       
         

       $factura->save();
    }

    public function update(Request $request) {
        $factura = Factura::findOrFail($request->id);
        $factura->cantidad = $request->cantidad;
        $factura->precio = $request->precio;


        $factura->save();
        
    }

    public function delete(Request $request) {
        $factura = Factura::findOrFail($request->id);    
        $factura->delete();
    }
}
