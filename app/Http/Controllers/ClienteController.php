<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use Inertia\Inertia;
class ClienteController extends Controller
{
     public function index(){
        
        $cliente = Cliente::all();
        return Inertia::render('Clientes',['Clientes'=>$cliente]);
        // return [
        //     'Clientes' => $cliente
        // ];
    }



    public function store (Request $request){
       $cliente = new Cliente();
       $cliente->cedula_cliente = $request->cedulaCliente;
       $cliente->nombre_cliente = $request->nombreCliente;
       $cliente->telefono_cliente = $request->telefonoCliente;
       $cliente->email_cliente = $request->emailCliente;
       $cliente->genero_cliente = $request->generoCliente;
       $cliente->direccion_cliente = $request->direccionCliente;

         

       $cliente->save();
    }

    public function update(Request $request) {
        $cliente = Cliente::findOrFail($request->id);
        $cliente->cedula_cliente = $request->cedulaCliente;
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
