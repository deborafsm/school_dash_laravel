<?php

namespace App\Http\Controllers\Api\Evento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Evento extends Controller
{
    public function newEvent(Request $request)
    {

        $titulo = $request->titulo;
        $data = $request->data;
        $hora = $request->hora;
        $obs = $request->obs;

        DB::insert(
            "INSERT INTO evento (titulo,data,hora,obs)VALUE(:titulo, :data, :hora , :obs)",
            [
                'titulo' => $titulo,
                'data' => $data,
                'hora' => $hora,
                'obs' => $obs
            ]
        );
        $msg = [
            'status' => 1,
            'msg' => "Evento Cadastrado.",
        ];
        return json_encode($msg);
    }

    public function getListEvents(Request $request)
    {
        // dd("teste");
        // die();
        $listEvents = DB::select("SELECT titulo, data, hora, obs FROM evento");
        return json_encode($listEvents);
    }
}
