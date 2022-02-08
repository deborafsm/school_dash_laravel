<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class View extends Controller
{
    public function viewMenu()
    {
        return view('Dashboard.Menu.menu');
    }
    public function viewProf()
    {
        return view('Dashboard.Professor.professor');
    }
    public function viewListAluno()
    {
        return view('Dashboard.Aluno.lista_aluno');
    }
    public function viewCurso()
    {
        return view('Dashboard.Curso.curso');
    }
    public function viewEvento(){
        return view('Dashboard.Evento.evento');
    }
    public function viewListEvento(){
        return view('Dashboard.Evento.listEvents');
    }
    public function viewMateria(){
        return view('Dashboard.Materia.materia');
    }
    public function viewTeste(){
        return view('Dashboard.Teste.teste');
    }
}
