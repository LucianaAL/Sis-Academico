<!DOCTYPE html>
<html>
  <head>
    <title>{{$title or 'SGERPEB'}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Styles-->
    <link href="{{url('assets/painel/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url('assets/painel/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url('assets/painel/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url('assets/painel/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{url('/painel/secretaria/')}}">SGERPEB</a>
        </div>
      </nav>
    </div>
    @yield('content')

    @stack('scripts')

  </body>
</html>
