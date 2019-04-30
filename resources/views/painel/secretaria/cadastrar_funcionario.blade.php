@extends ('painel.template.template_painel')

@section('content')
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">
          Sistema de Gestão Escolar
        </h1>
        <span><h4> Cadastrar Funcionario</h4></span>
      </div>
    </div>
    <!-- /. ROW  -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Formulário
          </div>
          <div class="panel-body">
          {!! Form::open(['action' => 'Painel\FuncionarioController@store']) !!}
            <div class="form-group col-md-12">
              {!! Form::label('nome','Nome') !!}
              {!! Form::text('nome', null, ['placeholder' => 'Nome', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('sexo','Sexo') !!}
              {!! Form::select('sexo', ['Masculino' => 'Masculino', 'Feminino' => 'Feminino'], null, ['placeholder' => 'Sexo', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('data_nasc','Data de Nascimento') !!}
              {!! Form::date('data_nasc', \Carbon\Carbon::now(), ['placeholder' => 'Data de Nascimento', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              <p> FOTO </p>
              <img src="{{url('assets/painel/imgs/user.png')}}" class="media-object" style="width:100px">
              <span><h7>(Máximo 64KB)</h7></span>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Remover foto
                  </label>
                </div>
                <div>
                  <button type="button" class="btn">Escolher arquivo</button>
                </div>
                <h7>Nenhum arquivo selecionado</h7>
              </div>
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('cpf','CPF') !!}
              {!! Form::number('cpf', null, ['placeholder' => 'CPF', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('rg','RG') !!}
              {!! Form::number('rg', null, ['placeholder' => 'RG', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('org_emis','Órgão Emissor') !!}
              {!! Form::text('org_emis', null, ['placeholder' => 'Órgão Emissor', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('data_expedi','Data da Expedição') !!}
              {!! Form::date('data_expedi', \Carbon\Carbon::now(), ['placeholder' => 'Data da Expedição', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('nacionalidade','Nacionalidade') !!}
              {!! Form::text('nacionalidade', null, ['placeholder' => 'Nacionalidade', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('est_nasc','Estado de Nascimento') !!}
              {!! Form::select('est_nasc', ['AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA','CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA','MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB','PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN','RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE','SP'=>'SP','TO'=>'TO'], null, ['placeholder' => 'Estado de Nascimento', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('mun_nasc','Município de Nascimento') !!}
              {!! Form::text('mun_nasc', null, ['placeholder' => 'Município de Nascimento', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('uf','UF') !!}
              {!! Form::select('uf', ['AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA','CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA','MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB','PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN','RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE','SP'=>'SP','TO'=>'TO'], null, ['placeholder' => 'UF', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('cep','CEP') !!}
              {!! Form::number('cep', null, ['placeholder' => 'CEP', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('endereco','Endereço') !!}
              {!! Form::text('endereco', null, ['placeholder' => 'Endereço', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('numero','Número') !!}
              {!! Form::number('numero', null, ['placeholder' => 'Número', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('complemento','Complemento') !!}
              {!! Form::text('complemento', null, ['placeholder' => 'Complemento', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('bairro','Bairro') !!}
              {!! Form::text('bairro', null, ['placeholder' => 'Bairro', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('município','Município') !!}
              {!! Form::text('municipio', null, ['placeholder' => 'Município', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('telefone','Telefone') !!}
              {!! Form::number('telefone', null, ['placeholder' => 'Telefone', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('escolaridade','Escolaridade') !!}
              {!! Form::select('escolaridade', ['Sem Escolaridade'=>'Sem Escolaridade','Ensino Fundamental'=>'Ensino Fundamental','Ensino Médio Incompleto'=>'Ensino Médio Incompleto','Ensino Médio Completo'=>'Ensino Médio Completo','Ensino Superior Incompleto'=>'Ensino Superior Incompleto','Ensino Superior Completo'=>'Ensino Superior Completo'], null, ['placeholder' => 'Escolaridade', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('posgrad','Pós Graduação') !!}
              {!! Form::select('posgrad', ['SIM' => 'Sim', 'NAO' => 'Não'], null, ['placeholder' => 'Pós Graduação', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('area','Área') !!}
              {!! Form::text('area', null, ['placeholder' => 'Área', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('anoform','Ano Conclusão') !!}
              {!! Form::text('anoform', null, ['placeholder' => 'Ano Conclusão', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('diretor','Diretor') !!}
              {!! Form::select('diretor', ['SIM' => 'Sim', 'NAO' => 'Não'], null, ['placeholder' => 'Diretor', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('funcionario_inep','INEP') !!}
              {!! Form::number('funcionario_inep', null, ['placeholder' => 'INEP da Escola', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="panel-body">
            <div id="page-inner">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="page-header">
                    Cadastrar Usuário
                  </h1>
                  <span><h4> Cadastro</h4></span>
                </div>
              </div>
              <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      Formulário
                    </div>
                    <div class="panel-body">
                      <div class="form-group col-md-12">
                        {!! Form::label('email','E-mail*') !!}
                        {!! Form::text('email', null, ['placeholder' => 'Example@gmail.com', 'class' => 'form-control']) !!}
                      </div>
                      <div class="form-group col-md-12">
                        {!! Form::label('password','Senha*') !!}
                        {!! Form::password('password', ['placeholder' => 'Senha', 'class' => 'form-control awesome']) !!}
                      </div>
                      <div>
                        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary pull-right']) !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
  <!-- jQuery Js -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- Bootstrap Js -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Metis Menu Js -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>
@endpush
