<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Escola;

class EscolaController extends Controller
{
    public function index()
    {
        $escolas = Escola::orderBy('id')->get();
        return view('painel.secretaria.listar_escolas', compact('escolas'));
    }
    public function create()
    {
      return view('painel.secretaria.cadastrar_escola');
    }
    public function store(Request $request)
    {

      $escolas = Escola::orderBy('id')->get();
      $id = $request->input('id');
      $escola = Escola::find($id);

      if(!$escola){
        $escola = new Escola();
      }

      $escola->fill($request->all());
      $save = $escola->save();

      \Session::flash('message', $escola->inep . 'added successfully');

      return redirect('/painel/secretaria/escolas');
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
