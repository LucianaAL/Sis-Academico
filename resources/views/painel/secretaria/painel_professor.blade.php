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
            Professor
          </div>

          <div class="panel-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <img src="{{url('assets/painel/imgs/user.png')}}" class="media-object" style="width:200px">
                </div>

                <b> Geraldo Freire de Santana Cunha </b>
                <h6>CPF: 9999.9999.9999.999 INEP: 87878887688 NIS: 876.98887.99</h6>
                <h6>Em Exercício  Matrícula: 445711
                </h6>
                <b> Escolaridade</b>
                <h6>Superior Completo</h6>
                <h6>Física</h6>
              </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  Turmas
                </div>


                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>Escola</th>
                          <th>Município</th>
                          <th>Turma</th>
                          <th>Turno</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>EMEF PROFESSOR DURMEVAL TRIGUEIRO MENDES</td>
                          <td>JOÃO PESSOA</td>
                          <td>1º ANO B</td>
                          <td>MANHÃ</td>
                        </tr>
                        <tr>
                          <td>EMEF PROFESSOR DURMEVAL TRIGUEIRO MENDES</td>
                          <td>JOÃO PESSOA</td>
                          <td>2º ANO B</td>
                          <td>TARDE</td>
                        </tr>
                        @foreach ($pets as $pet)
                        <tr>
                          @if ($pet->prof_id == 'logado')
                              @foreach ($escolas as $escola)
                                  @if ($pet->escola_id == $escola->inep)
                                      <td>{!! $escola->nome !!}</td>
                                      <td>{!! $escola->municipio !!}</td>
                                      @break
                                  @endif
                              @endforeach
                              @foreach ($turmas as $turma)
                                  @if ($pet->turma_id == $turma->id)
                                      <td>{!! $turma->descricao !!}</td>
                                      <td>{!! $turma->turno !!}</td>
                                      @break
                                  @endif
                              @endforeach
                          @endif
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
