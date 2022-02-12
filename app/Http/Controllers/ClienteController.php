<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
     public function index(){
        
        $cliente = Cliente::get();
        return [
            'Clientes' => $cliente
        ];
    }



    public function store (Request $request){
       $cliente = new Cliente();
       
       $cliente->nombre_cliente = $request->nombreCliente;
       $cliente->telefono_cliente = $request->telefonoCliente;
       $cliente->email_cliente = $request->emailCliente;
       $cliente->genero_cliente = $request->generoCliente;
       $cliente->direccion_cliente = $request->direccionCliente;

         

       $cliente->save();
    }

    public function update(Request $request) {
        $cliente = Cliente::findOrFail($request->id);
        $cliente->nombre_cliente = $request->nombreCliente;
        $cliente->telefono_cliente = $request->telefonoCliente;
        $cliente->email_cliente = $request->emailCliente;
        $cliente->genero_cliente = $request->generoCliente;
        $cliente->direccion_cliente = $request->direccionCliente;


        $cliente->save();
        
    }

    public function destroy(Request $request) {
        $cliente = Cliente::findOrFail($request->id);    
        $cliente->delete();
    }
}
