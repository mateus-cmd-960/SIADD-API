<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CadController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\GrauAcademicoController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\TipoParametroController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\AnoLectivoController;
use App\Http\Controllers\TipoMembroController;
use App\Http\Controllers\DimensaoController;
use App\Http\Controllers\UnidadeOrganicaController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\NivelAcessoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Rotas de Autenticacao
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//rotas para o professor
Route::get('professor', [ProfessorController::class, 'index']);
Route::post('professor/cadastrar', [ProfessorController::class, 'store']);
Route::put('professor/update/{id}', [ProfessorController::class, 'update']);
Route::delete( 'professor/delete/{id}', [ProfessorController::class, 'destroy']);

//Rotas para o cad
Route::get('cad', [CadController::class, 'index']);
Route::post('cad/cadastrar',[CadController::class, 'store']);
Route::put('cad/update/{id}', [CadController::class, 'update']);
Route::delete('cad/delete/{id}', [CadController::class, 'destroy']);

//Rotas para categoria
Route::get('categoria', [CategoriaController::class, 'index']);
Route::post('categoria/cadastrar', [CategoriaController::class, 'store']);
Route::put('categoria/update/{id}', [CategoriaController::class, 'update']);
Route::delete('categoria/delete/{id}', [CategoriaController::class, 'destroy']);

//Rotas para estudante
Route::get('estudante', [EstudanteController::class, 'index']);
Route::post('estudante/cadastrar', [EstudanteController::class, 'store']);
Route::put('estudante/update/{id}', [EstudanteController::class, 'update']);
Route::delete('estudante/delete/{id}', [EstudanteController::class, 'destroy']);

//Rotas para curso
Route::get('curso', [CursoController::class, 'index']);
Route::post('curso/cadastrar', [CursoController::class, 'store']);
Route::put('curso/update/{id}', [CursoController::class, 'update']);
Route::delete('curso/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para grau_academico
Route::get('grau', [CursoController::class, 'index']);
Route::post('grau/cadastrar', [CursoController::class, 'store']);
Route::put('grau/update/{id}', [CursoController::class, 'update']);
Route::delete('grau/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para parametro
Route::get('parametro', [CursoController::class, 'index']);
Route::post('parametro/cadastrar', [CursoController::class, 'store']);
Route::put('parametro/update/{id}', [CursoController::class, 'update']);
Route::delete('parametro/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para tipo_parametro
Route::get('tipo_parametro', [CursoController::class, 'index']);
Route::post('tipo_parametro/cadastrar', [CursoController::class, 'store']);
Route::put('tipo_parametro/update/{id}', [CursoController::class, 'update']);
Route::delete('tipo_parametro/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para disciplina
Route::get('disciplina', [CursoController::class, 'index']);
Route::post('disciplina/cadastrar', [CursoController::class, 'store']);
Route::put('disciplina/update/{id}', [CursoController::class, 'update']);
Route::delete('disciplina/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para anolectivo
Route::get('ano_lectivo', [CursoController::class, 'index']);
Route::post('ano_lectivo/cadastrar', [CursoController::class, 'store']);
Route::put('ano_lectivo/update/{id}', [CursoController::class, 'update']);
Route::delete('ano_lectivo/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para membro
Route::get('tipo_membro', [CursoController::class, 'index']);
Route::post('tipo_membro/cadastrar', [CursoController::class, 'store']);
Route::put('tipo_membro/update/{id}', [CursoController::class, 'update']);
Route::delete('tipo_membro/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para dimensao
Route::get('dimensao', [CursoController::class, 'index']);
Route::post('dimensao/cadastrar', [CursoController::class, 'store']);
Route::put('dimensao/update/{id}', [CursoController::class, 'update']);
Route::delete('dimensao/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para unidade_organica
Route::get('unidade_organica', [CursoController::class, 'index']);
Route::post('unidade_organica/cadastrar', [CursoController::class, 'store']);
Route::put('unidade_organica/update/{id}', [CursoController::class, 'update']);
Route::delete('unidade_organica/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para turma
Route::get('turma', [CursoController::class, 'index']);
Route::post('turma/cadastrar', [CursoController::class, 'store']);
Route::put('turma/update/{id}', [CursoController::class, 'update']);
Route::delete('turma/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para nivel_acesso
Route::get('nivel_acesso', [CursoController::class, 'index']);
Route::post('nivel_acesso/cadastrar', [CursoController::class, 'store']);
Route::put('nivel_acesso/update/{id}', [CursoController::class, 'update']);
Route::delete('nivel_acesso/delete/{id}', [CursoController::class, 'destroy']);

//Rotas para departamento
Route::get('departamento', [CursoController::class, 'index']);
Route::post('departamento/cadastrar', [CursoController::class, 'store']);
Route::put('departamento/update/{id}', [CursoController::class, 'update']);
Route::delete('departamento/delete/{id}', [CursoController::class, 'destroy']);

Route::group(['middleware'=>['auth:sactum']], function(){

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
