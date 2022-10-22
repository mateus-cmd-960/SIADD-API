<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dimensao;

class DimensaoController extends Controller
{
    public function index(){
        $dimensaos=Dimensao::all();

        return response()->json(['dimensaos'=>$dimensaos], 200);
    }

    public function store(Request $request){
        $dimensao=new Dimensao;

        $dimensao->descricao=$request->descricao;
        $dimensao->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $dimensao=Dimensao::find($id);

        If($dimensao){
            $dimensao->descricao=$request->descricao;
            $dimensao->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $tipo_membro=Dimensao::find($id);
        if($tipo_membro){
            $tipo_membro->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
