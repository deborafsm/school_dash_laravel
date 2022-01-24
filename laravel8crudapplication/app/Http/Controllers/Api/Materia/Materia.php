<?php

namespace App\Http\Controllers\Api\Materia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sql;
use Illuminate\Support\Facades\DB;

class Materia extends Controller
{
    public function newMateria(Request $request){
        $curso = $request->curso;
        $professor = $request->professor;
        $curso_id = $this->getIdCurso($curso);
        $prof_id = $this->getIdProf($professor);

        $cadastro = DB::transaction(function () use ($request) {
            $nome_materia = $request->nome_materia;
            $semestre = $request->semestre;
            $curso = $request->curso;
            $curso_id = $this->getIdCurso($curso);
            $professor = $request->professor;
            $prof_id = $this->getIdProf($professor);

            DB::insert("INSERT INTO materia(nome_materia, semestre) 
            VALUES (:nome_materia, :semestre)",
                [
                    'nome_materia' => $nome_materia,
                    'semestre' => $semestre
                ]
            );
            $msg = [
                'status' => 1,
                'msg' => "Materia inserida com sucesso!",
            ];
    
            return json_encode($msg);
            
        });
            DB::update("UPDATE materia m SET m.cod_curso = :id WHERE m.id = last_insert_id()",
                [
                    ":id" =>$curso_id->id
                ]);

            DB::update("UPDATE materia m SET m.cod_prof = :id WHERE m.id = last_insert_id()",
                [
                    ":id" =>$prof_id->id
                ]);

        return $cadastro;
        
    }
    public function getProf(Request $request)
    {
        $getPrf = DB::select("SELECT nome_completo FROM professor;" );
        return json_encode($getPrf);
    }

    public function getCurso()
    {
        $getCurso = DB::select("SELECT nome_curso FROM curso ;");
        return json_encode($getCurso);
    }
    
    public function getIdCurso($curso){
        
        $res = DB::select("SELECT c.id FROM curso c WHERE c.nome_curso = :curso",
            [
                ":curso" => $curso
            ]
        );
        foreach ($res as $key => $value) {
            return $id = $value;
        }
    }
    public function getIdProf($professor){
        $res = DB::select("SELECT p.id FROM professor p WHERE p.nome_completo = :professor",
        [
            ":professor" =>$professor
        ]
        );
        foreach($res as $key => $value){
            return $id = $value;
        }
    }
}
