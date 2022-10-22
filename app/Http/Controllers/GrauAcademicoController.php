<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grau_academico;

class GrauAcademicoController extends Controller
{

    public function index(){
        $graus=Grau_academico::all();

        return response()->json(['graus'=>$graus], 200);
    }

    public function store(Request $request){
        $grau=new Grau_academico;

        $grau->descricao=$request->descricao;

        $grau->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){
        $grau=Grau_academico::find($id);
            if($grau){
                $grau->descricao=$request->descricao;

                $grau->update();
                return response()->json(['messagem'=>'atualizado'], 200);
            }else{
                return response()->json(['messagem'=>'nao encontrado'], 200);
            }
    }
    public function destroy($id){
        $grau=Grau_academico::find($id);

        if($grau){
            $grau->delete();

            return response()->json(['mesagem'=>'deletado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
