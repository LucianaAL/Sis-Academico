@extends ('painel.template.template_painel')

@section('noContent')
<div id="wrapper">
  <nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
      <a class="navbar-brand">SGERPEB</a>
    </div>
  </div>


  <div class="container">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="jumbotron" style="margin-top:150px">
        <center><h3>SGERPEB</h3></center>
        <br>
        <center><h5>Recuperação de senha</h5></center>
        <br>
        <center><h7>Digite seu email no campo abaixo</h7></center>


        <form>
          <div class="form-group">
            <input type="email" class="form-control"
            placeholder="Email">
          </div>

          <button type="submit" class="btn btn-primary form-control">Enviar</button>

        </form>
      </div>
    </div>
    <div class="col-lg-4"></div>
  </div>

<style type="text/css">

body{
  background-color: #4682B4;
}
</style>

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
