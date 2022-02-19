<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
class FacturaController extends Controller
{
   
    public function index(){
        
        $factura = Factura::all();
        return Inertia::render('Facturas',['Facturas' => $factura]);

      
    }

    public function indexData(){
        
        $factura = Factura::all();
       
            return [
                'Facturas' =>$factura
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

    public function destroy(Request $request) {
        $factura = Factura::findOrFail($request->id);    
        $factura->delete();
    }
}
