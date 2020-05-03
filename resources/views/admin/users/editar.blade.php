@extends('layout.site')

@section('titulo', 'Usuarios')

@section('conteudo')

  <div class="container">
    <h3 class='center'>Editando Usuario </h3>
    <div class="row">
      <form class="" action="{{ route('admin.users.atualizar', $registro->id)}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.users._form')
        <button class="btn teal lighten-2">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
