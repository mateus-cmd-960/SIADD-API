<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{

    public function index(){
        $professors=Professor::all();
        return response()->json(['professors'=>$professors], 200);
    }

    public function store(Request $request){

        $professor=new Professor;

        $professor->nome=$request->nome;
        $professor->conselho_cientifico=$request->conselho_cientifico;

        $professor->save();
        return response()->json(['messagem'=>'professor cadastrado'], 200);


    }

    public function update(Request $request, $id){
        $professor= Professor::find($id);

        if($professor){
            $professor->nome=$request->nome;
            $professor->conselho_cientifico=$request->conselho_cientifico;
            $professor->update();

            return response()->json(['messagem'=>'professor atualizado com sucesso '], 200);
        }else{
            return response()->json(['messagem'=>'professor nao encontrado'], 404);
        }
    }

    public function destroy($id){

        $professor=Professor::find($id);

        if($professor){
            $professor->delete();
            return response()->json(['messagem'=>'professor removido'], 200);
            
        }else{
            return response()->json(['message'=>'professor nao encontrado'], 404);
        }

        


    }
}
