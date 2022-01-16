<?php

namespace App\Http\Controllers\Api\Alunos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditAlunos extends Controller
{
    public function editAlunos(Request $request)
    {
        // dd("teste");
        // die();
        $id = $request->id;
        $nome_aluno = $request->nome_aluno;
        $data_nascimento = $request->data_nascimento;
        $cpf = $request->cpf;
        $rg = $request->rg;
        $telefone = $request->telefone;
        $curso = $request->curso;

        $edit = DB::update("UPDATE aluno
        SET `nome_aluno` = :nome_aluno,
         `data_nascimento` = :data_nascimento, 
         `cpf` = :cpf,
         `rg` = :rg, 
         `telefone` = :telefone
        WHERE `aluno`.`id` = :id", [
            ":id" => $id,
            ":nome_aluno" => $nome_aluno,
            ":data_nascimento" => $data_nascimento,
            ":cpf" => $cpf,
            ":rg" => $rg,
            ":telefone" => $telefone,
            ":curso" => $curso,
        ]);
        if ($edit) {
            return json_encode($response = [
                'status' => 1,
                'msg' => "Aluno editado com sucesso."
            ]);
        } else {
            return json_encode($response = [
                'status' => 2,
                'msg' => "Erro ao editar motorista"
            ]);
        }
        return json_encode($response);
    }


    public function getIdAluno(Request $request, $id)
    {
        // dd("TESTE");
        // die();
        $response = DB::select(
            "SELECT a.nome_aluno FROM aluno AS a WHERE id = :id",

            [
                ":id" => $id
            ]
        );
        return json_encode($response);
    }
}
