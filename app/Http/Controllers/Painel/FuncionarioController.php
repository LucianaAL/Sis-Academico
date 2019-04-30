<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Painel\Funcionario;
use App\User;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::orderBy('funcionario_id')->get();
        return view('painel.secretaria.listar_funcionarios', compact('funcionarios'));
    }
    public function create()
    {
      return view('painel.secretaria.cadastrar_funcionario');
    }
    public function store(Request $request)
    {

      $funcionarios = Funcionario::orderBy('nome')->get();
      $id = $request->input('id');
      $funcionario = User::find($id);
      $usuario = User::find($id);

      if(!$funcionario){
        $funcionario = new Funcionario();
      }
      if(!$usuario){
        $usuario = new User();
      }

      $usuario->fill($request->all());
      $funcionario->fill($request->all());
      $usuario->name = $funcionario->nome;
      $usuario->password = Hash::make($usuario['password']);
      $save = $usuario->save();
      $funcionario->funcionario_id = $usuario->id;
      $save = $funcionario->save();

      \Session::flash('message', $funcionario->nome . 'added successfully');

      return redirect('/painel/secretaria/funcionarios');
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
