<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Escola;
use App\Models\Painel\Profissional;
use App\Models\Painel\Funcionario;
use App\Models\Painel\Aluno;

class SecretariaController extends Controller
{
    private $escola;
    private $profissional;
    private $funcionario;
    private $aluno;

    public function __construct(Escola $escola, Profissional $profissional, Funcionario $funcionario, Aluno $aluno){
      $this->escola = $escola;
      $this->profissional = $profissional;
      $this->funcionario = $funcionario;
      $this->aluno = $aluno;
    }

    public function index()
    {
        $escolas = $this->escola->all();

        return view('painel.secretaria.index', compact('escolas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title ='SGERPEB - Cadastrar escola';

      return view('painel.secretaria.cadastrar_escola', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pega todos os dados que vem do Formulário
        $dataForm = $request-> all();

        $insert = $this-> escola-> create($dataForm);

        if ($insert)
          return redirect()->route('secretaria.index');
        else
          return redirect()->route('secretaria.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tests(){
      /* Inserir
      $insert = $this->escola->create([
        'nome' => 'Unipe',
        'sit_funcionamento' => 'Ativo',
        'cep' => '58322-000',
        'endereco' => 'Rua bancario',
        'numero' => '123',
        'bairro' => 'bancario',
        'municipio' =>'João Pessoa',
        'uf' => 'PB',
        'local_funcionamento' => 'Predio Escolar',
        'gestor' => 'Alvaro',
      ]);
      if ($insert)
        return 'Inserido com sucesso';
      else
        return 'Falha ao inserir';

      Atualizar
      $esc = $this->escola->find(3);
      $update = $esc->update([
        'nome' => 'Unipe',
        'sit_funcionamento' => 'Ativo',
        'cep' => '58322-000',
        'endereco' => 'Rua bancario',
        'numero' => '123',
        'bairro' => 'bancario',
        'municipio' =>'João Pessoa',
        'uf' => 'PB',
        'local_funcionamento' => 'Predio Escolar',
        'gestor' => 'Alvaro',
      ]);
      if ($esc)
        return 'Atualizado com sucesso';
      else
        return 'Falha ao atualizar';

      /* Deletar
      $esc = $this->escola->find(3);
      $delete = $esc->delete();

      if($delete)
        return 'Deletado com sucesso';
      else
        return 'Falha ao deletar';*/
    }

    // Secretaria
    public function painelSecretaria(){
      $escolas = $this->escola->all();
      return view('painel.secretaria.painel_secretaria', compact('escolas'));
    }
    public function cadastrarSecretaria(){
      $title ='SGERPEB - Cadastrar Secretaria';
      return view('painel.secretaria.cadastrar_secretaria', compact('title'));
    }

    // Escola
    public function cadastrarEscola(){
      $title ='SGERPEB - Cadastrar escola';
      return view('painel.secretaria.cadastrar_escola', compact('title'));
    }
    public function listarEscolas(){
      $title ='SGERPEB - Lista de escolas';
      $escolas = $this->escola->all();
      return view('painel.secretaria.listar_escolas', compact('title', 'escolas'));
    }

    // Funcionario
    public function cadastrarDiretor(){
      $title ='SGERPEB - Cadastrar diretor';
      return view('painel.secretaria.cadastrar_diretor', compact('title'));
    }
    public function listarFuncionarios(){
      $title ='SGERPEB - Lista de funcionarios';
      $funcionarios = $this->funcionario->all();
      return view('painel.secretaria.listar_funcionarios', compact('title', 'funcionarios'));
    }

    // Profissional - Funcionario
    public function painelProfissional(){
      return view('painel.secretaria.painel_profissional', compact(''));
    }
    public function cadastrarProfissional(){
      $title ='SGERPEB - Cadastrar profissional';
      return view('painel.secretaria.cadastrar_profissional', compact('title'));
    }
    public function listarProfissionais(){
      $title ='SGERPEB - Lista de profissionais';
      $profissionais = $this->profissional->all();
      return view('painel.secretaria.listar_profissionais', compact('title', 'profissionais'));
    }
    // Professor
    public function painelProfessor(){
      return view('painel.secretaria.painel_professor', compact(''));
    }

    // Aluno
    public function painelAluno(){
      return view('painel.secretaria.painel_aluno', compact(''));
    }
    public function cadastrarAluno(){
      $title ='SGERPEB - Cadastrar aluno';
      return view('painel.secretaria.cadastrar_aluno', compact('title'));
    }
    public function listarAlunos(){
      $title ='SGERPEB - Lista de alunos';
      return view('painel.secretaria.listar_alunos', compact('title'));
    }
    public function visualizarDesempenho(){
      $title ='SGERPEB - Desempenho';
      return view('painel.secretaria.visualizar_desempenho', compact(''));
    }

    // Turma
    public function cadastrarTurmas(){
      $title ='SGERPEB - Cadastrar turmas';
      return view('painel.secretaria.cadastrar_turmas', compact('title'));
    }
    public function listarTurmas(){
      $title ='SGERPEB - Lista de turmas';
      return view('painel.secretaria.listar_turmas', compact('title'));
    }

    // Usuario
    public function cadastrarUsuario(){
      $title ='SGERPEB - Cadastrar usuario';
      return view('painel.secretaria.cadastrar_usuario', compact('title'));
    }
}
