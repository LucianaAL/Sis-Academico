<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Painel\Profissional;
use App\Models\Painel\Disciplina;
use App\Models\Painel\ProfEscolaTurma;
use App\Models\Painel\Turma;
use App\Models\Painel\Escola;
use App\User;

class ProfissionalController extends Controller
{
  public function index()
  {
    $profissionais = Profissional::orderBy('profissional_id')->get();
    $disciplinas = Disciplina::orderBy('id')->get();
    return view('painel.secretaria.listar_profissionais', compact('profissionais', 'disciplinas'));
  }
  public function create()
  {
    return view('painel.secretaria.cadastrar_profissional');
  }
  public function store(Request $request)
  {

    $profissionais = Profissional::orderBy('nome')->get();
    $disciplinas = Disciplina::orderBy('id')->get();
    $id = $request->input('id');
    $profissional = User::find($id);
    $usuario = User::find($id);

    if(!$profissional){
      $profissional = new Profissional();
    }
    if(!$usuario){
      $usuario = new User();
    }

    $usuario->fill($request->all());
    $profissional->fill($request->all());
    $usuario->name = $profissional->nome;
    $usuario->password = Hash::make($usuario['password']);
    $save = $usuario->save();
    $profissional->profissional_id = $usuario->id;
    $save = $profissional->save();

    \Session::flash('message', $profissional->nome . 'added successfully');

    return redirect('/painel/secretaria/professores');
  }
  public function show($id)
  {
      //
  }
  public function edit($id)
  {
      //
  }
  public function update(Request $request, $id)
  {
      //
  }
  public function destroy($id)
  {
      //
  }
  public function painelProfessor(){
    $pets = ProfEscolaTurma::orderBy('id')->get();
    $turmas = Turma::orderBy('turma_descricao')->get();
    $escolas = Escola::orderBy('inep')->get();
    return view('painel.secretaria.painel_professor', compact('pets','turmas','escolas'));
  }
}
