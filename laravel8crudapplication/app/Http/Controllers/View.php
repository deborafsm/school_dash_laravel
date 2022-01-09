<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View extends Controller
{
    public function viewMenu(){
        return view('Dashboard.Menu.menu');
    }
    public function viewProf(){
        return view('Dashboard.Professor.professor');
    }
}
