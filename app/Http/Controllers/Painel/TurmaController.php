<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Turma;
use App\Models\Painel\Aluno;

class TurmaController extends Controller
{
    public function index()
    {
        $turmas = Turma::orderBy('turma_descricao')->get();
        $alunos = Aluno::orderBy('aluno_id')->get();
        return view('painel.secretaria.listar_turmas', compact('turmas', 'alunos'));
    }
    public function create()
    {
      return view('painel.secretaria.cadastrar_turmas');
    }
    public function store(Request $request)
    {

      $turmas = Turma::orderBy('turma_descricao')->get();
      $id = $request->input('id');
      $turma = Turma::find($id);

      if(!$turma){
        $turma = new Turma();
      }

      $turma->fill($request->all());
      $save = $turma->save();

      \Session::flash('message', $turma->turma_descricao . 'added successfully');

      return redirect('/painel/secretaria/turmas');
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
