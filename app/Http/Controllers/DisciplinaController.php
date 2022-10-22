<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinaController extends Controller
{
    public function index(){
        $disciplinas=Disciplina::all();

        return response()->json(['disciplinas'=>$disciplinas], 200);
    }

    public function store(Request $request){
        $disciplina=new Disciplina;

        $disciplina->descricao=$request->descricao;

        $disciplina->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){
        $disciplina=Disciplina::find($id);
            if($disciplina){
                $disciplina->descricao=$request->descricao;

                $disciplina->update();
                return response()->json(['messagem'=>'atualizado'], 200);
            }else{
                return response()->json(['messagem'=>'nao encontrado'], 200);
            }
    }
    public function destroy($id){
        $disciplina=Disciplina::find($id);

        if($disciplina){
            $disciplina->delete();

            return response()->json(['mesagem'=>'deletado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
