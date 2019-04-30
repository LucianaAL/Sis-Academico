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
            Aluno
          </div>
          <div class="panel-body">
            <p>
              <a href="#" type="button" class="btn btn-primary">HISTÓRICO</a>
              <a href="{{url('/painel/aluno/desempenho')}}" type="button" class="btn btn-primary">DESEMPENHO</a>
            </p>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <img src="{{url('assets/painel/imgs/user.png')}}" class="media-object" style="width:200px">
                </div>
                <b> Samuel Lucas Oliveira Freitas </b>
                <h6>CPF: 9999.9999.9999.999 INEP: 87878887688 NIS:</h6>
                <h6>Ativo  Matrícula: 666711
                </h6>
                <b> Filiação</b>
                <h6>Suely Berlardino</h6>
                <h6>José Alves da Silva</h6>

                <b> Domicílio</b>
                <h6>Rua Alves castro, nº231 - Bairro: Cristo Redentor</h6>
                <h6>CEP: 6998980 João Pessoa, Paraíba, Brasil</h6>


                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">EEEFM Profª Liliosa de Paiva Leite</th>
                      <th>Turma</th>
                      <th>Turno</th>
                      <th>Ano</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Ensino Regular</th>
                      <td>Ensino Médio 1º Ano B</td>
                      <td> Manhã </td>
                      <td>  2017 </td>
                    </tr>
                  </tbody>
                </table>
              </form>
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
