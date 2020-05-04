@extends('layout.site')

@section('titulo', 'Projetos')

@section('conteudo')

  <div class="container">
    <h3 class='center'>/Editando Projeto </h3>
    <div class="row">
      <form class="" action="{{ route('admin.projetos.atualizar', $registro->id)}}" method="post">
        {{ csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('admin.projetos._form')
        <button class="btn teal lighten-2">Atualizar</button>
      </form>
    </div>
  </div>
@endsection
