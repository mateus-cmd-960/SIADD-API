<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // funcao rsgistrar usuario
   public function register(Request $request){
    $request->validate([
        'name'=>'required|string',
        'email'=>'required|string|unique:user,email',
        'password'=>'required|string|confirmed'
    ]);

    $user=User::create(
        [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)

        ]
    );
    $token=$user->createToken('primeirotoken')->plainTextToken;
    $response=[
        'user'=>$user,
        'token'=>$token
    ];
    return response($response, 201);
   } 

   public function login(Request $request){

        $request->validate(
            [
                'email'=>'required|string',
                'password'=>'required|string'

            ];
                //verificar o email do usuario
            $user=User::where('email', $request->email)->first();

            //validar o usuario
            if(!$user || Hash::check($request->password, $user->password)){
                return response ([
                    'message'=>'credenciais invalidas'
                ], 401);

            }
            $token=$user->createToken('primeirotoken')->plainTextToken;
            $response=[
                'user'=>$user,
                'token'=>$toke
                
            ]
            return response($response, 201);
        );
   }
   public function logout(){
    auth()->users()->tokens()->delete();
    return response[
        'message'=>'logout efectuado com sucesso'
    ];
   }
}
