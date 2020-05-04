@extends('layout.site')

@section('titulo', 'Recursos')

@section('conteudo')

  <div class="container">
    <h3 class='center'>Lista de Recursos </h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Objeto</th>
            <th>Destino</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->descrrecurso }}</td>
              <td>{{ $registro->objeto }}</td>
              <td>{{ $registro->destino }}</td>
              <td>
                <a class="btn teal lighten-2" href="{{ route('admin.recursos.visualizar', $registro->id)}}">Ver</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.recursos.adicionar')}}">Adicionar</a>
    </div>
  </div>


@endsection
