<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function index(){
        $turmas=Turma::all();

        return response()->json(['turmas'=>$turmas], 200);
    }

    public function store(Request $request){
        $turma=new Turma;

        $turma->descricao=$request->descricao;
        $turma->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $turma=Turma::find($id);

        If($turma){
            $turma->descricao=$request->descricao;
            $turma->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $tipo_membro=Turma::find($id);
        if($tipo_membro){
            $tipo_membro->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
