<?php

Route::group(['namespace' => 'Painel', 'middleware' => 'auth'], function() {
  Route::get('/', 'SecretariaController@index');
  Route::get('/home', 'SecretariaController@index')->name('home');
  Route::get('/painel/secretaria', 'SecretariaController@painelSecretaria');
  Route::get('/painel/secretaria/cadastrar', 'SecretariaController@cadastrarSecretaria');
  Route::get('/painel/secretaria/escolas', 'EscolaController@index');
  Route::get('/painel/secretaria/escolas/cadastrar', 'EscolaController@create');
    Route::post('/painel/secretaria/escolas/cadastrar', 'EscolaController@store');
  Route::get('/painel/funcionario', 'SecretariaController@painelProfissional');
  Route::get('/painel/secretaria/funcionarios', 'FuncionarioController@index');
  Route::get('/painel/secretaria/funcionarios/cadastrar', 'FuncionarioController@create');
    Route::post('/painel/secretaria/funcionarios/cadastrar', 'FuncionarioController@store');
  Route::get('/painel/professor', 'ProfissionalController@painelProfessor');
  Route::get('/painel/secretaria/professores', 'ProfissionalController@index');
  Route::get('/painel/secretaria/professores/cadastrar', 'ProfissionalController@create');
    Route::post('/painel/secretaria/professores/cadastrar', 'ProfissionalController@store');
  Route::get('/painel/aluno', 'SecretariaController@painelAluno');
  Route::get('/painel/aluno/desempenho', 'SecretariaController@visualizarDesempenho');
  Route::get('/painel/secretaria/alunos', 'AlunoController@index');
  Route::get('/painel/secretaria/alunos/cadastrar', 'AlunoController@create');
    Route::post('/painel/secretaria/alunos/cadastrar', 'AlunoController@store');
  Route::get('/painel/secretaria/turmas', 'TurmaController@index');
  Route::get('/painel/secretaria/turmas/cadastrar', 'TurmaController@create');
    Route::post('/painel/secretaria/turmas/cadastrar', 'TurmaController@store');
});

//Route::group(['namespace' => 'Site', 'middleware' => 'auth'], function() {
Route::get('/login', 'HomeController@Login');
//});

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
