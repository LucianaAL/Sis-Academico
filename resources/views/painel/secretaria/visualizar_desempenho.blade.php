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
        <div class="panel panel-default">
          <div class="panel-heading">
            <b> Samuel Lucas Oliveira Freitas </b>
            <h6>CPF: 9999.9999.9999.999 INEP: 87878887688 NIS:</h6>
            <h6> Ensino Regular - Ensino Médio  1º ANO B  Manhã  2017</h6>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <b>EEEFM Profª Liliosa de Paiva Leite</b>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>Disciplina</th>
                            <th>1º Bim</th>
                            <th>F</th>
                            <th>2º Bim</th>
                            <th>F</th>
                            <th>3º Bim</th>
                            <th>F</th>
                            <th>4º Bim</th>
                            <th>F</th>
                            <th>Média</th>
                            <th>Rec. Final</th>
                            <th>Nota Final</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Artes</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Matemática</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Educação Física</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Geografia</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Sociologia</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Biologia</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">História</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Filosofía</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Língua Portuguesa</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Química</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <th scope="row">Física</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
