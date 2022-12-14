<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_membro;

class TipoMembroController extends Controller
{
    public function index(){
        $tipo_membros=Tipo_membro::all();

        return response()->json(['tipo_membros'=>$tipo_membros], 200);
    }

    public function store(Request $request){
        $tipo_membro=new Tipo_membro;

        $tipo_membro->descricao=$request->descricao;
        $tipo_membro->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $tipo_membro=Tipo_membro::find($id);

        If($tipo_membro){
            $tipo_membro->descricao=$request->descricao;
            $tipo_membro->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $tipo_membro=Tipo_membro::find($id);
        if($tipo_membro){
            $tipo_membro->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
