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
            Tabela de Funcionarios
          </div>
          <div class="panel-body">
            <p>
              <a href="{{url('/painel/secretaria/funcionarios/cadastrar')}}" type="button" class="btn btn-primary">CADASTRAR NOVO FUNCIONARIO</a>
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
                            <th>Unidade Escolar</th>
                            <th>UF</th>
                            <th>Município</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td>Alessandra Duarte da Silva</td>
                            <td>68888889990</td>
                            <td>Feminino</td>
                            <td>Nome Aleatorio 2</td>
                            <td>PB</td>
                            <td>Pedra Velha</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Rui Barbosa</td>
                            <td>45645127544</td>
                            <td>Masculino</td>
                            <td>Nome Aleatorio 2</td>
                            <td>PB</td>
                            <td>Pedra Nova</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Regina de Souza Santos</td>
                            <td>69988866433</td>
                            <td>Feminino</td>
                            <td>Nome Aleatorio 3</td>
                            <td>BA</td>
                            <td>Pedra Papel</td>
                          </tr>
                          @forelse ($funcionarios as $funcionario)
                          <tr>
                            <td>{!! $funcionario->funcionario_id !!}</td>
                            <td>{!! $funcionario->nome !!}</td>
                            <td>{!! $funcionario->cpf !!}</td>
                            <td>{!! $funcionario->sexo !!}</td>
                            <td>Escola Aleatorio</td>
                            <td>{!! $funcionario->uf !!}</td>
                            <td>{!! $funcionario->municipio !!}</td>
                          </tr>
                          @empty
                          @endforelse
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
