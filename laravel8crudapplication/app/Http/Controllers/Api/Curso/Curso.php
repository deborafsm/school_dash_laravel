<?php

namespace App\Http\Controllers\Api\Curso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sql;
use Illuminate\Support\Facades\DB;

class Curso extends Controller
{
    public function getCursos(Request $request)
    {
        $res = DB::table('cursos')->orderBy('curso')->get();
        foreach ($res as $key)
        {
            $lista[] = [$key];
        }
        
        return json_encode($lista);
        
        
    }
}
