<?php

namespace App\Http\Controllers\Api\Alunos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Alunos extends Controller
{
    public function newAluno(Request $request)
    {
        $nome_aluno = $request->nome_aluno;
        $data_nascimento = $request->data_nascimento;
        $cpf = $request->cpf;
        $rg = $request->rg;
        $telefone = $request->telefone;
        $curso = $request->curso;

        DB::insert("INSERT INTO aluno (nome_aluno, data_nascimento, cpf, rg, telefone, curso) 
        VALUE(:nome_aluno, :data_nascimento, :cpf, :rg, :telefone, :curso)",
            [
                'nome_aluno' => $nome_aluno,
                'data_nascimento' => $data_nascimento,
                'cpf' => $cpf,
                'rg' => $rg,
                'telefone' => $telefone,
                'curso' => $curso
            ]
        );
        $msg = [
            'status' => 1,
            'msg' => "Aluno Cadastrado com sucesso",
        ];

        return json_encode($msg);
    }

    public function getAluno(Request $request)
    {
        
        $res = DB::select('select a.id , a.nome_aluno, a.data_nascimento, a.cpf, a.rg, a.telefone, a.curso from aluno as a');
        return json_encode($res);
       
    }
}
