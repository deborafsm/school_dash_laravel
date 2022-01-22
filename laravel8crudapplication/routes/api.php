<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Alunos\Alunos;
use App\Http\Controllers\Api\Alunos\EditAlunos;
use App\Http\Controllers\Api\Curso\Curso;
use App\Http\Controllers\Api\Professor\newProfessor;
use App\Http\Controllers\Api\Evento\Evento;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Aluno
Route::post('/newAluno', [Alunos::class, 'newAluno'])->name('ads.api.newAluno');
Route::post('/edit', [EditAlunos::class, 'editAlunos'])->name('ads.api.editAlunos');
Route::get('/GetById/{id}', [EditAlunos::class, 'getIdAluno'])->name('ads.api.getIdAluno');
Route::get('/getAllAluno', [Alunos::class, 'getAluno'])->name('ads.api.allAluno');
Route::get('/getCursos', [Curso::class, 'getCursos'])->name('ads.api.getCursos');
// Professores
Route::post('/newPrf', [newProfessor::class, 'insertProfessor'])->name('ads.api.newprof');
// Eventos
Route::post('/newEventos', [Evento::class, 'newEvent']);
Route::get('/listEvents', [Evento::class, 'getListEvents']);
// Curso
Route::post('/newCurso', [Curso::class, 'addCurso']);
