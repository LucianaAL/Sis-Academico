@extends ('painel.template.template_painel')

@section('content')
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper">
    <div id="page-inner">


      <div class="row">
        <div class="col-md-12">
          <h1 class="page-header">
            Sistema de Gestão Escolar
            <p>Painel ADMIN
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
          <a href="{{url('/painel/secretaria')}}" type="button">
            <div class="panel panel-primary text-center no-boder bg-color-green">
              <div class="panel-body">
                <i class="fa fa-bar-chart-o fa-5x"></i>
              </div>
              <div class="panel-footer back-footer-green">
                Secretaria de Educação
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
          <a href="{{url('/painel/funcionario')}}" type="button">
            <div class="panel panel-primary text-center no-boder bg-color-blue">
              <div class="panel-body">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="panel-footer back-footer-blue">
                Funcionario / Diretor
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
          <a href="{{url('/painel/professor')}}" type="button">
            <div class="panel panel-primary text-center no-boder bg-color-red">
              <div class="panel-body">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="panel-footer back-footer-red">
                Professor
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
          <a href="{{url('/painel/aluno')}}" type="button">
            <div class="panel panel-primary text-center no-boder bg-color-brown">
              <div class="panel-body">
                <i class="fa fa-user fa-5x"></i>
              </div>
              <div class="panel-footer back-footer-brown">
                Aluno
              </div>
            </div>
          </a>
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
  <!-- Morris Chart Js -->
  <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
  <script src="assets/js/morris/morris.js"></script>
  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>
@endpush
