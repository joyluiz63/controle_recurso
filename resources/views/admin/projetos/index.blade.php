@extends('layout.site')

@section('titulo', 'Projetos')

@section('conteudo')

  <div class="container">
    <h3 class='center'>Lista de Projetos </h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Projeto/Atividade</th>
            <th>Vínculo</th>
            <th>Ano Validade</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->codigo }}</td>
              <td>{{ $registro->vinculo }}</td>
              <td>{{ $registro->validade }}</td>
              <td>
                <a class="btn teal lighten-2" href="{{ route('admin.projetos.visualizar', $registro->id)}}">Ver</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.projetos.adicionar')}}">Adicionar</a>
    </div>
  </div>


@endsection
