<!DOCTYPE html>
<html>
  <head>
    <title>{{$title or 'SGERPEB'}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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
          <a class="navbar-brand" href="{{url('/')}}">SGERPEB</a>
        </div>

        <!-- /.dropdown -->
        <ul class="nav navbar-top-links navbar-right ml-auto">
          <!-- Authentication Links -->
          @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
<!--            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </nav>
      <!--/. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <a href="{{url('/painel/secretaria')}}"><i class="glyphicon glyphicon-home"></i>Início</a>
            </li>
            <li>
              <a href="{{url('/painel/secretaria/alunos')}}"><i class="fa fa-user"></i>Alunos</a>
            </li>
            <li>
              <a href="{{url('/painel/secretaria/funcionarios')}}"><i class="fa fa-users"></i>Funcionarios</a>
            </li>
            <li>
              <a href="{{url('/painel/secretaria/escolas')}}"><i class="glyphicon glyphicon-home"></i>Escolas</a>
            </li>
            <li>
              <a href="{{url('/painel/secretaria/professores')}}"><i class="fa fa-users"></i>Professores</a>
            </li>
            <li>
              <a href="{{url('/painel/secretaria/turmas')}}"><i class="fa fa-group"></i>Turmas</a>
            </li>
          </ul>
        </div>
      </nav>

    @yield('content')

    @stack('scripts')

  </body>
</html>
