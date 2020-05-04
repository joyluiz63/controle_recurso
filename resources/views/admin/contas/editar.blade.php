@extends('layout.site')

@section('titulo', 'Recursos')

@section('conteudo')

  <div class="container">
    <h3 class='center'>/Editando Recurso </h3>
    <div class="row">
      <form class="" action="{{ route('admin.recursos.atualizar', $registro->id)}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.recursos._form')
        <button class="btn teal lighten-2">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
