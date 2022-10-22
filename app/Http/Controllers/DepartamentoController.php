<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
     public function index(){
        $departamentos=Departamento::all();

        return response()->json(['departamentos'=>$departamentos], 200);
    }

    public function store(Request $request){
        $departamento=new Departamento;

        $departamento->descricao=$request->descricao;
        $departamento->save();

        return response()->json(['messagem'=>'adicionado'], 200);
    }

    public function update(Request $request, $id){

        $departamento=Departamento::find($id);

        If($departamento){
            $departamento->descricao=$request->descricao;
            $departamento->update();

            return response()->json(['messagem'=>'atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }

    public function destroy($id){
        $tipo_membro=Departamento::find($id);
        if($tipo_membro){
            $tipo_membro->delete();

            return response()->json(['messagem'=>'nao encontrado'], 404);
        }
    }
}
