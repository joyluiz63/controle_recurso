@extends('layout.site')

@section('titulo', 'Usuarios')

@section('conteudo')

  <div class="container">
    <h3 class='center'>Lista de Usuarios </h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->name }}</td>
              <td>{{ $registro->email }}</td>
              <td>
                <a class="btn teal lighten-2" href="{{ route('admin.users.editar', $registro->id)}}">Editar</a>
                <a class="btn red" href="{{ route('admin.users.deletar', $registro->id)}}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.users.adicionar')}}">Adicionar</a>
    </div>
  </div>


@endsection
