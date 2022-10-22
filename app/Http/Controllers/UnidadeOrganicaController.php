<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade_organica;

class UnidadeOrganicaController extends Controller
{
    public function index(){
        $unidade_organicas=Unidade_organica::all();

        return response()->json(['unidade_organicas'=>$unidade_organicas], 200);
    }

    public function store(Request $request){
        $unidade_organica=new Unidade_organica;

        $unidade_organica->descricao=$request->descricao;
        $unidade_organica->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $unidade_organica=Unidade_organica::find($id);

        If($unidade_organica){
            $unidade_organica->descricao=$request->descricao;
            $unidade_organica->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $tipo_membro=Unidade_organica::find($id);
        if($tipo_membro){
            $tipo_membro->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
