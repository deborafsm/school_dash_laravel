<?php

namespace App\Http\Controllers\Api\Curso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sql;
use Illuminate\Support\Facades\DB;

class Curso extends Controller
{       

    public function addCurso(Request $request)
    {
      
        $cadastro = DB::transaction(function () use($request) {
            // curso
            $nome_curso = $request->nome_curso;
            $duracao_sem = $request->duracao_sem;
         

            DB::insert("INSERT INTO curso(nome_curso, duracao_sem) 
            VALUES (:nome_curso, :duracao_sem)",
                [
                    'nome_curso' => $nome_curso,
                    'duracao_sem' => $duracao_sem
                ]
            );
            $msg = [
                'status' => 1,
                'msg' => "Curso inserido com sucesso!",
            ];
    
            return json_encode($msg);
        });

    }
       
}
