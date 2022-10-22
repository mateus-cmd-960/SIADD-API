<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ano_lectivo;

class AnoLectivoController extends Controller
{
    public function index(){
        $ano_lectivos=Ano_lectivo::all();

        return response()->json(['ano_lectivos'=>$ano_lectivo], 200);
    }

    public function store(Request $request){
        $ano_lectivo=new Ano_lectivo;

        $ano_lectivo->descricao=$request->descricao;
        $ano_lectivo->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $ano_lectivo=Ano_lectivo::find($id);

        If($ano_lectivo){
            $ano_lectivo->descricao=$request->descricao;
            $ano_lectivo->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $ano_lectivo=Ano_lectivo::find($id);
        if($ano_lectivo){
            $ano_lectivo->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
