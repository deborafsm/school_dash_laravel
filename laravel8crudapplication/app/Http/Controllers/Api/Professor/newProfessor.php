<?php

namespace App\Http\Controllers\Api\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newProfessor extends Controller
{
    public function insertProfessor(Request $request){
       

        $cadastro = DB::transaction(function () use ($request) {
            
            $nome_completo = $request-> nome_completo_prf;
            $data_nascimento = $request-> data_nascimento_prf;
            $matricula = $request->matricula_prf;
            $telefone = $request->telefone_prf;
          
    
            DB::insert("INSERT  INTO professor (nome_completo, data_nascimento, matricula, telefone)
             VALUES (:nome_completo_prf, :data_nascimento_prf, :matricula_prf, :telefone_prf)",
                 [
                    'nome_completo_prf' => $nome_completo,
                    'data_nascimento_prf' => $data_nascimento,
                    'matricula_prf' => $matricula,
                    'telefone_prf'=> $telefone
                 ]
                );
                $msg = [
                    'status' => 1,
                    'msg' => "Professor Cadastrado com sucesso",
                ];
        
                return json_encode($msg);
        });
      


        return $cadastro;
    }

 


   
}
