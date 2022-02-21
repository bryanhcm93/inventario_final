<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use Inertia\Inertia;
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
    //    la acabo de agregar si algo borrarlo 1;31:19 video 15 de diciembre
    //    $factura = id_cliente= $request->idCliente;
       $factura->cantidad = $request->cantidad;
    //    $factura->precio = $request->precio;

    $factura->precio=100000;
       
       
         

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
