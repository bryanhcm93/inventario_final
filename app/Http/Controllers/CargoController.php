<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoController extends Controller
{
     //
     public function index(){
        
        $cargo = Cargo::get();
        return [
            'Cargos' => $cargo
        ];
    }



    public function store (Request $request){
       $cargo = new Cargo();
       
       $cargo->nombre_cargo = $request->nombreCargo;
      
   

       $cargo->save();
    }

    public function update(Request $request) {
        $cargo = Cargo::findOrFail($request->id);
        $cargo->nombre_cargo = $request->nombreCargo;
       


        $cargo->save();
        
    }

    public function delete(Request $request) {
        $cargo = Cargo::findOrFail($request->id);    
        $cargo->delete();
    }

}
