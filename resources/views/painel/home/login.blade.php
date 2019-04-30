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

        <form method="POST" action="{{ route('login') }}">
          <div class="form-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar Me') }}
            </label>

          </div>

          <button type="submit" class="btn btn-primary form-control">{{ __('Entrar') }}</button>
          <div>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Esqueceu sua senha?') }}
            </a><br>
          </div>

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
