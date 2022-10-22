<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel_acesso;

class NivelAcessoController extends Controller
{
    public function index(){
        $nivel_acessos=Nivel_acesso::all();

        return response()->json(['nivel_acessos'=>$nivel_acessos], 200);
    }

    public function store(Request $request){
        $nivel_acesso=new Nivel_acesso;

        $nivel_acesso->descricao=$request->descricao;
        $nivel_acesso->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $nivel_acesso=Nivel_acesso::find($id);

        If($nivel_acesso){
            $nivel_acesso->descricao=$request->descricao;
            $nivel_acesso->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $nivel_acesso=Nivel_acesso::find($id);
        if($nivel_acesso){
            $nivel_acesso->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
