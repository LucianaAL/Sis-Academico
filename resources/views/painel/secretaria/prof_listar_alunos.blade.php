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
            Tabela de Alunos
          </div>
          <div class="panel-body">
            <p>
              <a href="{{url('/painel/secretaria/alunos/cadastrar')}}" type="button" class="btn btn-primary">CADASTRAR NOVO ALUNO</a>
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
                            <th>Matricula</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Sexo</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($alunos as $aluno)
                          <tr>
                            <td>{!! $aluno->aluno_id !!}</td>
                            <td>{!! $aluno->nome !!}</td>
                            <td>{!! $aluno->cpf !!}</td>
                            <td>{!! $aluno->sexo !!}</td>
                            @foreach ($escolas as $escola)
                              @if ($aluno->aluno_inep == $escola->inep)
                                @php
                                  $esc = $escola->nome
                                @endphp
                                @break
                              @endif
                            @endforeach
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
