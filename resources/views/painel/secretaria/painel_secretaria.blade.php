@extends ('painel.template.template_painel')

@section('content')
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
  <div id="page-inner">


    <div class="row">
      <div class="col-md-12">
        <h1 class="page-header">
          Painel Secretaria de Educação
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
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                          <tr>
                            <th scope="row">1111</th>
                            <td>EMEF PROFESSOR DURMEVAL TRIGUEIRO MENDES<</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>DURMEVAL TRIGUEIRO MENDES</td>

                          </tr>
                          <tr>
                            <th scope="row">2222</th>
                            <td>EMEF JOAO XXIII</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>JOAO PAULO</td>
                          </tr>
                          <tr>
                            <th scope="row">3333</th>
                            <td>EEEIF FRANCISCO CAMPOS</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>FRANCISCO CAMPOS</td>
                          </tr>

                          <tr>
                            <th scope="row">4444</th>
                            <td>EEEFM RAUL MACHADO</td>
                            <td>PB</td>
                            <td>JOÃO PESSOA</td>
                            <td>RAUL MACHADO</td>
                          </tr>
                          @forelse ($escolas as $escola)
                          <tr>
                            <th scope="row">{{$escola->inep_id}}</th>
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
        <div class="row">
          <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
              <div class="panel-heading">
                Tabela de Diretores
              </div>
              <div class="panel-body">
                <p>
                  <a href="{{url('/painel/secretaria/diretores/cadastrar')}}" type="button" class="btn btn-primary">CADASTRAR NOVO DIRETOR</a>
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
                                <td>Alessandra Duarte da Silva</td>
                                <td>68888889990</td>
                                <td>Feminino</td>
                                <td>Nome Aleatorio 2</td>
                                <td>PB</td>
                                <td>Pedra Velha</td>
                              </tr>
                              <tr>
                                <td>Rui Barbosa</td>
                                <td>45645127544</td>
                                <td>Masculino</td>
                                <td>Nome Aleatorio 2</td>
                                <td>PB</td>
                                <td>Pedra Nova</td>
                              </tr>
                              <tr>
                                <td>Regina de Souza Santos</td>
                                <td>69988866433</td>
                                <td>Feminino</td>
                                <td>Nome Aleatorio 3</td>
                                <td>BA</td>
                                <td>Pedra Papel</td>
                              </tr>
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
