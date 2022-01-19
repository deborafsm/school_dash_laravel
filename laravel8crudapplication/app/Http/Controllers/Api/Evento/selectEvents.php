<?php

namespace App\Http\Controllers\Api\Evento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class selectEvents extends Controller
{   
    public function selectEvents(Request $request){
        // dd("tste");
        // die();
        $select = DB::select('SELECT titulo, data, hora, obs FROM evento');

        return json_encode($select);

    }   

}
