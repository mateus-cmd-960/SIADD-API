<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_parametro;

class TipoParametroController extends Controller
{
    public function index(){
        $tipo_parametros=Parametro::all();

        return response()->json(['tipo_parametros'=>$tipo_parametros], 200);
    }
    public function store(Request $request){
        $tipo_parametro=new Tipo_parametro;

        $tipo_parametro->descricao=$request->descricao;
        $tipo_parametro->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){
        $tipo_parametro=Tipo_parametro::find($id);

        if($tipo_parametro){
            $tipo_parametro->descricao=$request->descricao;

            $tipo_parametro->update();
    
            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }

       
    }

    public function destroy($id){
        $tipo_parametro=Tipo_parametro::find($id);

        if($tipo_parametro){
            $tipo_parametro->delete();

            return response()->json(['messagem'=>'deletado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
