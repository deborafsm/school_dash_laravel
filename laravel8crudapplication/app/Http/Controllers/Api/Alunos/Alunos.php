<?php

namespace App\Http\Controllers\Api\Alunos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Alunos extends Controller
{
    public function newAluno(Request $request)
    {
        $curso = $request->curso;
        $aluno_id = $this->getCurso($curso);

        $cadastro = DB::transaction(function () use ($request) {
            $nome_aluno = $request->nome_aluno;
            $data_nascimento = $request->data_nascimento;
            $cpf = $request->cpf;
            $rg = $request->rg;
            $telefone = $request->telefone;
            $curso = $request->curso;
            $aluno_id = $this->getCurso($curso);

            DB::insert('INSERT INTO aluno (nome_aluno, data_nascimento, cpf, rg, telefone) 
            VALUE(:nome_aluno, :data_nascimento, :cpf, :rg, :telefone)',
                [
                    'nome_aluno' => $nome_aluno,
                    'data_nascimento' => $data_nascimento,
                    'cpf' => $cpf,
                    'rg' => $rg,
                    'telefone' => $telefone

                ]
            );
            $msg = [
                'status' => 1,
                'msg' => "Aluno Cadastrado com sucesso",
            ];

            return json_encode($msg);
        });


        DB::update("UPDATE aluno a SET a.fk_curso = :id WHERE a.id = last_insert_id()",
            [
                ":id" => $aluno_id->id
            ]);



        return $cadastro;
    }

 
    public function getAluno(Request $request)
    {
        // $res = DB::select('select a.id , a.nome_aluno, a.data_nascimento, a.cpf, a.rg, a.telefone, a.curso from aluno as a');
        $res = DB::select("SELECT  DISTINCT
        a.nome_aluno,
        a.data_nascimento,
        a.cpf,
        a.rg,
        a.telefone,
        c.nome_curso AS  Curso
        FROM 
        aluno a
        INNER JOIN curso c ON c.id =fk_curso;");
        return json_encode($res);
    }

    public function getCurso($curso)
    {
        $res = DB::select("SELECT c.id FROM curso c WHERE c.nome_curso = :nome",
            [
                ":nome" => $curso
            ]
        );
        foreach ($res as $key => $value) {
            return $id = $value;
        }
    }
}
