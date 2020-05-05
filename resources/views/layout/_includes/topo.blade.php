<!DOCTYPE html>
<html>
  <head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <div class="container">
      <header>
        <nav>
            <div class="nav-wrapper teal lighten-2">
              <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
              <li><a href="{{ route('home') }}">Home</a></li>

                @if (@Auth::guest())
                  <li><a href="{{route('login')}}">Login</a></li>
                @else
                  <li><a href="{{route('admin.recursos')}}">Recursos</a></li>
                  <li><a href="{{route('admin.projetos')}}">Projetos</a></li>
                  <li><a href="{{route('admin.eventos')}}">Eventos</a></li>
                  {{--<li><a href="{{route('admin.contas')}}">Contas</a></li>
                  <li><a href="{{route('admin.prazos')}}">Prazos</a></li>
                  <li><a href="{{route('admin.planejados')}}">Planos</a></li>
                  <li><a href="{{route('admin.executados')}}">Executados</a></li>
                  <li><a href="{{route('admin.compras')}}">Compras</a></li>
                  <li><a href="{{route('admin.prorrogas')}}">Prorrogações</a></li>--}}
                  <li><a href="{{route('admin.users')}}">Usuarios</a></li>
                  <li><a href="#">{{ Auth::user()->name }}</a></li> 
                  <li><a href="{{route('login.sair')}}">Sair</a></li>
                @endif


              </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
        <li><a href="home">Home</a></li>

        @if (@Auth::guest())
          <li><a href="{{route('login')}}">Login</a></li>
        @else
          <li><a href="{{route('admin.users')}}">Usuarios</a></li>
          <li><a href="#">{{ Auth::user()->name }}</a></li>
          <li><a href="{{route('login.sair')}}">Sair</a></li>
        @endif

        </ul>
      </header>
  </div>
