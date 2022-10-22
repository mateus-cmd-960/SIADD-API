<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categorias=Categorias::all();

        return response()->json(['categorias'=>$categorias], 200);
    }

    public function store(Request $request){
        $categoria=new Categoria;

        $categoria->descricao=$request->descricao;

        $categoria->save();
        return response()->json(['messagem'=>'categoria adicionada'], 200);
    }

    public function update(Request $request, $id){
        $categoria= Categoria::find($id);

        if($categoria){
            $categoria->descricao=$request->categoria;
            $categoria->update();
            return response()->json(['messagem'=>'categoria atualizada'], 200);
        }else{
            return response()->json(['messagem'=>'categoria nao encontrada'], 404);
        }
    }

    public function destroy($id){
        $categoria=Categoria::find($id);
            if($categoria){
                $categoria->delete();

                return response()->json(['messagem'=>'categoria eliminada'], 200);
            }else{
                return response()->json(['messagem'=>'categoria nao encontrada'], 404);
            }
    }
        
}
