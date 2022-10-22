<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parametro;

class ParametroController extends Controller
{
    public function index(){
        $parametros=Parametro::all();

        return response()->json(['parametros'=>$parametros], 200);
    }
    public function store(Request $request){
        $parametro=new Parametro;

        $parametro->descricao=$request->descricao;
        $parametro->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){
        $parametro=Parametro::find($id);

        if($parametro){
            $parametro->descricao=$request->descricao;

            $parametro->update();
    
            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }

       
    }

    public function destroy($id){
        $parametro=Parametro::find($id);

        if($parametro){
            $parametro->delete();

            return response()->json(['messagem'=>'deletado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
