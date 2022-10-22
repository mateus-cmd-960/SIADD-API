<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){
        $cursos=Curso::all();
        
        return response()->json(['cursos'=>$cursos], 200);
    }

    public function store(Request $request){
        $curso=new Curso;

        $curso->descricao=$request->descricao;
        $curso->save();

        return response()->json(['messagem'=>'curso cadastrado'], 200);
    }

    public function update(Request $request, $id){
        $curso=Curso::find($id);
        if($curso){
            $curso->descricao=$request->descricao;
            $curso->update();

            return response()->json(['messagem'=>'curso atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'curso nao encontrado'], 404);

        }
    }

    public function destroy($id){
        if($curso){
            $curso->delete();
            return response()->json(['messagem'=>'curso deletado'], 200);
        }else{
            return response()->json(['messagem'=>'curso nao encontrado'], 404); 
        }
    }
}
