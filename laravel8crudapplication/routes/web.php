<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\View;
use App\Http\Controllers\Api\MakeCsv;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[View::class, 'viewMenu'])->name('ads.aluno');
// Route::get('/alunos',[View::class, 'viewMenu'])->name('ads.aluno');
Route::get('/professores',[View::class, 'viewProf'])->name('ads.professor');
Route::get('/listAluno',[View::class, 'viewListAluno'])->name('ads.listAluno');
Route::get('/curso',[View::class, 'viewCurso'])->name('ads.curso');
Route::get('/evento', [View::class, 'viewEvento'])->name('ads.evento');
Route::get('/xls', [MakeCsv::class, 'export'])->name('csv');
// Route::get('/', function () {
//     return view('index');
// });
