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
            Tabela de Escolas
          </div>
          <div class="panel-body">
            <p>
              <a href="{{url('/painel/secretaria/escolas/cadastrar')}}" type="button" class="btn btn-primary">CADASTRAR NOVA ESCOLA</a>
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
                            <th>INEP</th>
                            <th>Nome da Escola</th>
                            <th>UF</th>
                            <th>Município</th>
                            <th>Nome do Gestor</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1111</td>
                            <td>EMEF PROFESSOR DURMEVAL TRIGUEIRO MENDES</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>DURMEVAL TRIGUEIRO MENDES</td>

                          </tr>
                          <tr>
                            <td>2222</td>
                            <td>EMEF JOAO XXIII</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>JOAO PAULO</td>
                          </tr>
                          <tr>
                            <td>3333</td>
                            <td>EEEIF FRANCISCO CAMPOS</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>FRANCISCO CAMPOS</td>
                          </tr>

                          <tr>
                            <td>4444</td>
                            <td>EEEFM RAUL MACHADO</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>RAUL MACHADO</td>
                          </tr>
                          @forelse ($escolas as $escola)
                          <tr>
                            <td>{{$escola->inep}}</td>
                            <td>{{$escola->nome}}</td>
                            <td>{{$escola->uf}}</td>
                            <td>{{$escola->municipio}}</td>
                            <td>{{$escola->gestor}}</td>
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
