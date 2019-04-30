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
    <div class="row">
      <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
          <div class="panel-heading">
            Histórico
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3 class="page-header">
              <center>  Dados da Unidade de Ensino</center>
            </h3>
            </div>
          </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <form>
                      <div class="form-row">
                        <div class="col-md-5">
                          <label for="validationDefault01">Município</label>
                          <input type="text" class="form-control" id="validationDefault01" required>
                        </div>
                        <div class="col-md-2">
                          <label for="validationDefault02">UF</label>
                          <input type="text" class="form-control" id="validationDefault02" required>
                        </div>
                        <div class="col-md-3">
                          <label for="validationDefault03">Telefone</label>
                          <input type="numeric" class="form-control" id="validationDefault03" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h3 class="page-header">
                        <center>  Dados do Educando</center>
                      </h3>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="col-md-5">
                              <label for="validationDefault01">Nome do Educando</label>
                              <input type="text" class="form-control" id="validationDefault01" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault02">Sexo</label>
                              <input type="text" class="form-control" id="validationDefault02" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault03">Data de Nascimento</label>
                              <input type="numeric" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault04">Natural-de-UF</label>
                              <input type="text" class="form-control" id="validationDefault04" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault05">Nacionalidade</label>
                              <input type="text" class="form-control" id="validationDefault05" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault06">RG</label>
                              <input type="text" class="form-control" id="validationDefault06" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault07">Nome do Pai</label>
                              <input type="text" class="form-control" id="validationDefault07" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault08">Nome da Mãe</label>
                              <input type="text" class="form-control" id="validationDefault08" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault09">Endereço (AV,Rua,Nº,Bairro)</label>
                              <input type="text" class="form-control" id="validationDefault09" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault010">CEP</label>
                              <input type="text" class="form-control" id="validationDefault010" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault011">Município</label>
                              <input type="text" class="form-control" id="validationDefault011" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault012">UF</label>
                              <input type="text" class="form-control" id="validationDefault012" required>
                            </div>
                            <div class="col-md-5">
                              <label for="validationDefault013">Telefone</label>
                              <input type="text" class="form-control" id="validationDefault013" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <h3 class="page-header">
                            <center>  Estudos realizados</center>
                          </h3>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Período</th>
                                  <th>Ano Cursado</th>
                                  <th>Modalidade</th>
                                  <th>Unidade de ensino frequentada pelo educando</th>
                                  <th>Município</th>
                                  <th>UF</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th ></th>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <th></th>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observação</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h3 class="page-header">
                          <center>  Redirecionamento Regular</center>
                        </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <h4 class="page-header">
                          <center><b>Ensino Fundamental</b></center>
                        </h4>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>Disciplina</th>
                              <th>1º</th>
                              <th>2º</th>
                              <th>3º</th>
                              <th>4º</th>
                              <th>5º</th>
                              <th>6º</th>
                              <th>7º</th>
                              <th>8º</th>
                              <th>9º</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>Artes</th>
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
                              <th >Matemática</th>
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
                              <th >Educação Física</th>
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
                              <th >Geografia</th>
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
                              <th >Sociologia</th>
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
                              <th >Biologia</th>
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
                              <th>História</th>
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
                              <th >Filosofía</th>
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
                              <th >Língua Portuguesa</th>
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
                              <th >Química</th>
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
                              <th>Física</th>
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

              <div class="row">
                <div class="col-md-12">
                  <h4 class="page-header">
                  <center><b>  Ensino Médio</b></center>
                </h4>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Disciplina</th>
                      <th>1º </th>
                      <th>2º </th>
                      <th>3º </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th >Artes</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Matemática</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Educação Física</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Geografia</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Sociologia</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Biologia</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >História</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Filosofía</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Língua Portuguesa</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Química</th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th >Física</th>
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
