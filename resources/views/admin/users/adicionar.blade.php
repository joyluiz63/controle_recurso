@extends('layout.site')

@section('titulo', 'Usuarios')

@section('conteudo')

  <div class="container">
    <h3 class="center">Adicionar Usuario</h3>
    <div class="row">
      <form action="{{ route('admin.users.salvar') }}" method="POST">
        {{ csrf_field() }}
        @include('admin.users._form')
        <button class="btn teal lighten-2">Salvar</button>
      </form>
    </div>
  </div>
@endsection