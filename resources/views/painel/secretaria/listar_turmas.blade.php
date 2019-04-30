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
      </div>
    </div>
    <!-- /. ROW  -->
    <div class="row">
      <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
          <div class="panel-heading">
            Tabela de Turmas
          </div>
          <div class="panel-body">
            <p>
              <a href="{{url('/painel/secretaria/turmas/cadastrar')}}" type="button" class="btn btn-primary">CADASTRAR NOVA TURMA</a>
            </p>
            <div class="row">
              <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>Descrição</th>
                            <th>Ano</th>
                            <th>Turno</th>
                            <th>Modalidade/Etapa</th>
                            <th>Matriculas</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $mat= 0
                          @endphp
                          @foreach ($turmas as $turma)
                          <tr>
                            <td>{!! $turma->turma_descricao !!}</td>
                            <td>{!! $turma->ano !!}</td>
                            <td>{!! $turma->turno !!}</td>
                            <td>{!! $turma->modalidade !!}</td>
                            @foreach ($alunos as $aluno)
                              @if ($turma->id == $aluno->aluno_turma)
                                @php
                                  $mat += 1
                                @endphp
                              @endif
                            @endforeach
                            <td>{!! $mat !!}</td>
                            @php
                              $mat= 0
                            @endphp
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
  <!-- DATA TABLE SCRIPTS -->
  <script src="assets/js/dataTables/jquery.dataTables.js"></script>
  <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
  <script>
  $(document).ready(function () {
  $('#dataTables-example').dataTable();
  });
  </script>
  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>
@endpush
