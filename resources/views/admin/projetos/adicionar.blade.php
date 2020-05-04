@extends('layout.site')

@section('titulo', 'Projetos')

@section('conteudo')

  <div class="container">
    <h3 class='center'>Adicionar Projeto </h3>
    <div class="row">
      <form action="{{ route('admin.projetos.salvar')}}" method="post">
        {{ csrf_field()}}
        @include('admin.projetos._form')
        <button class="btn teal lighten-2">Salvar</button>
      </form>
    </div>
  </div>
@endsection
