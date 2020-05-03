@extends('layout.site')

@section('titulo', 'Recursos')

@section('conteudo')

  <div class="container">
    <h3 class='center'>Adicionar Recurso </h3>
    <div class="row">
      <form class="" action="{{ route('admin.recursos.salvar')}}" method="post">
        {{ csrf_field()}}
        @include('admin.recursos._form')
        <button class="btn teal lighten-2">Salvar</button>
      </form>
    </div>
  </div>
@endsection
