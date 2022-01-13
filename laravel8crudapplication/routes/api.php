<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Alunos\Alunos;
use App\Http\Controllers\Api\Curso\Curso;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Aluno
Route::post('/newAluno', [Alunos::class, 'newAluno'])->name('ads.api.newAluno');
Route::get('/getAluno', [Alunos::class, 'getAluno'])->name('ads.api.allAluno');
Route::get('/getCursos', [Curso::class, 'getCursos'])->name('ads.api.getCursos');
