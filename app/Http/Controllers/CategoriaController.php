<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        
        $categoria = Categoria::get();
        return [
            'Categorias' => $categoria
        ];
    }



    public function store (Request $request){
       $categoria = new Categoria();
       
       $categoria->nombre = $request->nombre;
       $categoria->descripcion = $request->descripcion;
       $categoria->estado = $request->edo;
   

       $categoria->save();
    }

    public function update(Request $request) {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->estado = $request->estado;


        $categoria->save();
        
    }

    public function delete(Request $request) {
        $categoria = Categoria::findOrFail($request->id);    
        $categoria->delete();
    }
}
