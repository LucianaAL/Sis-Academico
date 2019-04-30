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
        <span><h4> Cadastrar Turmas </h4></span>
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
          {!! Form::open(['action' => 'Painel\TurmaController@store']) !!}
            <div class="form-group col-md-6">
              {!! Form::label('turma_descricao','Descrição') !!}
              {!! Form::text('turma_descricao', null, ['placeholder' => 'Descrição', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('ano','Ano') !!}
              {!! Form::number('ano', null, ['placeholder' => 'Ano', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('turno','Turno') !!}
              {!! Form::select('turno', ['Manha' => 'Manhã', 'Tarde' => 'Tarde', 'Noite' => 'Noite'], null, ['placeholder' => 'Turno', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('modalidade','Modalidade') !!}
              {!! Form::select('modalidade', ['Ensino Fundamental' => 'Ensino Fundamental','Ensino Médio' => 'Ensino Médio','Ensino EJA' => 'Ensino EJA'], null, ['placeholder' => 'Modalidade', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-6">
              {!! Form::label('turma_inep','INEP') !!}
              {!! Form::number('turma_inep', null, ['placeholder' => 'INEP da Escola', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-12">
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
