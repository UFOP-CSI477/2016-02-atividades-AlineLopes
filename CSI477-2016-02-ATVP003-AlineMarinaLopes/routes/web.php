<?php

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

Route::get('/', function () {
  $name = "Aline";
    //acesso a view o with é a parte de atribuição
    // return view('welcome', compact($name)); ouuu
    return view('welcome')-> with('name',$name);
});

Route::get('/about', function () {

    // return view('welcome', compact($name)); ouuu
    return view('about');
});

// Route::get('estados', function () {
//
//   //$estados = DB::table('estados')->get();
//   $estados = App\Estado::all();
//   return view('estados.index')->with('estados',$estados);
// });
// Route::get('/cidades/{cidade}', function ($id) {
//
//   $estados = DB::table('alunos')->find($id);
//   //dd($aluno);
//   return view('cidades.show')->with('cidade', $cidade);
// });


// Route::get('cidades', function () {
//
//   //$cidades = DB::table('cidades')->get();
//   $cidades = App\Cidade::all();
//   return view('cidades.index')->with('cidades',$cidades);
// });
// Route::get('/cidades/{cidade}', function ($id) {
//
//   $cidades = DB::table('cidades')->find($id);
//   //dd($aluno);
//   return view('cidades.show')->with('cidade', $cidade);
// });

Route::get('alunosold', function () {
	$alunos = Aluno::all();
	return view('alunos.index')->with('alunos', $alunos);
});

Route::get('/alunosold/{aluno}', function ($id) {
	$aluno = DB::table('alunos')->find($id);
	return view('alunos.show')->with('aluno', $aluno);
});

Route::resource('disciplinas', 'DisciplinaController');
Route::resource('alunos', 'AlunoController');
Route::resource('cidades', 'CidadeController');
Route::resource('estados', 'EstadoController');
Route::resource('turmas', 'TurmaController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
