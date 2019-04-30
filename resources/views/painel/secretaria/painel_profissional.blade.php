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
            Escola
          </div>

          <div class="panel-body">
            <form>
              <p>
                <a href="{{url('/painel/secretaria/profissionais/cadastrar')}}" type="button" class="btn btn-primary">CADASTRAR NOVO FUNCIONÁRIO</a>
              </p>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <img src="{{url('assets/painel/imgs/escola.jpg')}}" class="media-object" style="width:200px">
                </div>

                      <b> EEEFM Profª Liliosa de Paiva Leite </b>
                      <h6>Escola Estadual INEP 2500000000
                        UTB 222222222</h6>
                        <h6>Em atividade
                          Descreto: 18.898-10.10.1984
                        </h6>
                        <b> Localização</b>
                        <h6>Av. Dom Bosco, nº s/n - Bairro: Cristo Redentor</h6>
                        <h6>João Pessoa, PB  CEP: 580000-000</h6>
              </div>
            </div>
            <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7573137030217!2d-34.880257785225794!3d-7.154033794834398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace8315afb6a3d%3A0x5551a5b28940efcc!2sEscola+Estadual+de+Ensino+Fundamental+e+Medio+Professora+Liliosa+de+Paiva+Leite!5e0!3m2!1spt-BR!2sbr!4v1523376392667" width="973" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            <div class="row">
              <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>Profissionais</th>
                            <th>Alunos</th>
                            <th>Turmas</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                            <td>44</td>
                            <td>254</td>
                            <td>9</td>
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
