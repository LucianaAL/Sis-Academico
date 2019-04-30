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
        <span><h4> Cadastrar Escola</h4></span>
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
          {!! Form::open(['action' => 'Painel\EscolaController@store']) !!}
            <div class="form-group col-md-12">
              {!! Form::label('nome','Nome') !!}
              {!! Form::text('nome', null, ['placeholder' => 'Nome', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('inep','INEP') !!}
              {!! Form::text('inep', null, ['placeholder' => 'INEP', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('utb','UTB') !!}
              {!! Form::text('utb', null, ['placeholder' => 'UTB', 'class' => 'form-control']) !!}
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
              {!! Form::label('sit_funcionamento','Situação de Funcionamento') !!}
              {!! Form::select('sit_funcionamento',['Ativo' => 'Ativo', 'Desativado' => 'Desativado'], null, ['placeholder' => 'Situação de Funcionamento', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('uf','UF') !!}
              {!! Form::select('uf', ['AC'=>'AC','AL'=>'AL','AM'=>'AM','AP'=>'AP','BA'=>'BA','CE'=>'CE','DF'=>'DF','ES'=>'ES','GO'=>'GO','MA'=>'MA','MG'=>'MG','MS'=>'MS','MT'=>'MT','PA'=>'PA','PB'=>'PB','PE'=>'PE','PI'=>'PI','PR'=>'PR','RJ'=>'RJ','RN'=>'RN','RO'=>'RO','RR'=>'RR','RS'=>'RS','SC'=>'SC','SE'=>'SE','SP'=>'SP','TO'=>'TO'], null, ['placeholder' => 'UF', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('cep','CEP') !!}
              {!! Form::text('cep', null, ['placeholder' => 'CEP', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('endereco','Endereço') !!}
              {!! Form::text('endereco', null, ['placeholder' => 'Endereço', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('numero','Número') !!}
              {!! Form::text('numero', null, ['placeholder' => 'Número', 'class' => 'form-control']) !!}
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
              {!! Form::label('local_funcionamento','Local de Funcionamento') !!}
              {!! Form::select('local_funcionamento', ['Predio Escolar'=>'Predio Escolar','Casa do Professor'=>'Casa do Professor','Unidade Socioeducativa'=>'Unidade Socioeducativa','Templo/Igreja'=>'Templo/Igreja','Salas em Outra Escola'=>'Salas em Outra Escola','Unidade Prisional'=>'Unidade Prisional','Sala de Empresas'=>'Sala de Empresas','Outros'=>'Outros'], null, ['placeholder' => 'Local de Funcionamento', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-12">
              {!! Form::label('gestor','Diretor da Escola') !!}
              {!! Form::text('gestor', null, ['placeholder' => 'Diretor da Escola', 'class' => 'form-control']) !!}
            </div>
            <div>
              {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary pull-right']) !!}
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
