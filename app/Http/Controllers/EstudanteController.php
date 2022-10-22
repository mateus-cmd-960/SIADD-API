<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudante;

class EstudanteController extends Controller
{
    public function index(){
        $estudantes=Estudante::all();

        return response()->json(['estudantes'=>$estudantes], 200);
    }

    public function store(Request $request){
        $estudante=new Estudante;

        $estudante->nome=$request->nome;
        $estudante->n_processo=$request->n_processo;
        $estudante->bilhete=$request->bilhete;

        $estudante->save();

        return response()->json(['messagem'=>'estudante cadastrado'], 200);
    }

    public function update(Request $request, $id){
        $estudante=Estudante::find($id);

        if($estudante){

            $estudante->nome=$request->nome;
            $estudante->n_processo=$request->n_processo;
            $estudante->bilhete=$request->bilhete;

            $estudante->update();

            return response()->json(['messagem'=>'estudante atualizado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }

    }

    public function destroy($id){
        $estudante=Estudante::find($id);

        if($estudante){
            $estudante->delete();

            return response()->json(['messagem'=>'deletado'], 200);
        }else{
            return response()->json(['messagem'=>'nao encontrado'], 404);
        }   
    }
 }

