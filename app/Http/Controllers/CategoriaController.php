<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function index(){
        
        $categoria = Categoria::all();
        return Inertia::render('Categorias',['Categorias' => $categoria]);

      
    }

    public function indexData(){
        
        $categoria = Categoria::all();
       
            return [
                'Categorias' =>$categoria
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

    public function destroy(Request $request) {
        $categoria = Categoria::findOrFail($request->id);    
        $categoria->delete();
    }
}
