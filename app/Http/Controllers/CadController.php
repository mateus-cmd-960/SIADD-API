<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cad;

class CadController extends Controller
{
    public function index(){
        $cads=Cad::all();

        return response()->json(['cad'=>$cads], 200);
    }

    public function store(Request $request){
        $cad=new Cad;

        $cad->votos_a_favor=$request->votos_a_favor;
        $cad->votos_contra=$request->votos_contra;
        $cad->data_criacao=$request->data_criacao;
        $cad->descricao=$request->descricao;
        $cad->titulo=$request->titulo;

        $cad->save();

        return response()->json(['messagem'=>'cad cadastrado'], 200);
    }

    public function update(Request $request, $id){
        $cad=Cad::find($id);

        if($cad){
            $cad->votos_a_favor=$request->votos_a_favor;
            $cad->votos_contra=$request->votos_contra;
            $cad->data_criacao=$request->data_criacao;
            $cad->descricao=$request->descricao;
            $cad->titulo=$request->titulo;

            $cad->update();
            return response()->json(['messagem'=>'cad atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'cad nao existe'], 404);
        }
    }   
    
    public function destroy($id){
        $cad=Cad::find($id);

        if($cad){
            $cad->delete();

            return response()->json(['messagem'=>'deletado comsucesso'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
