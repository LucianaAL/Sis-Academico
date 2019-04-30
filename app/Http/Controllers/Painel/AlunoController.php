<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Painel\Aluno;
use App\Models\Painel\Escola;
use App\User;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('aluno_id')->get();
        $escolas = Escola::orderBy('inep')->get();
        return view('painel.secretaria.listar_alunos', compact('alunos', 'escolas'));
    }
    public function create()
    {
      return view('painel.secretaria.cadastrar_aluno');
    }
    public function store(Request $request)
    {

      $alunos = Aluno::orderBy('nome')->get();
      $escolas = Escola::orderBy('inep')->get();
      $id = $request->input('id');
      $aluno = User::find($id);
      $usuario = User::find($id);

      if(!$aluno){
        $aluno = new Aluno();
      }
      if(!$usuario){
        $usuario = new User();
      }

      $usuario->fill($request->all());
      $aluno->fill($request->all());
      $usuario->name = $aluno->nome;
      $usuario->password = Hash::make($usuario['password']);
      $save = $usuario->save();
      $aluno->aluno_id = $usuario->id;
      $save = $aluno->save();

      \Session::flash('message', $aluno->nome . 'added successfully');

      return redirect('/painel/secretaria/alunos');
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
}
