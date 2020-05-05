@extends('layout.site')

@section('titulo', 'SEMSA-Recursos')

@section('conteudo')

  <div class="container">
    <h5 class='center'>Entrar</h5>
    <div class="row">
      <form class="" action="{{ route('login.entrar')}}" method="post">
        {{ csrf_field()}}

        <div class="input-field">
            <input type="text" name="email" >
            <label>E-mail</label>
        </div>

        <div class="input-field">
            <input type="password" name="senha" >
            <label>Senha</label>
        </div>

        <button class="btn teal lighten-2">Entrar</button>
      </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


  </div>
@endsection
