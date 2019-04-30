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
        <span><h4> Cadastrar Secretaria </h4></span>
      </div>
    </div>
    <!-- /. ROW  -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Formulário
          </div>
          <div class="panel-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputmatricula4">Tipo</label>
                  <input type="numeric" class="form-control" id="inputmatricula4">
                  <p>
                  <button type="button" class="btn">Cadastrar</button>
                </p>
                </div>
              </div>

            </form>

          </div>
          <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
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
  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>
@endpush
