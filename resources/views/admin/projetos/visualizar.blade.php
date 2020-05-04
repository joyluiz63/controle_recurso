@extends('layout.site')

@section('titulo', 'Projetos')

@section('conteudo')

    <div class="container">
        <h3 class='center'>Lista de Projetos </h3>
        <div class="row">
            <tbody>
                <table>            
                    <tr>
                        <th>Id</th> <td>{{ $registro->id }}</td>
                    </tr>
                    <tr>
                        <th>Projeto/Atividade</th> <td>{{ $registro->codigo }}</td>
                    </tr>
                    <tr>
                        <th>Vinculo</th> <td>{{ $registro->vinculo }}</td>
                    </tr>
                    <tr>
                        <th>Ano de validade</th> <td>{{ $registro->validade }}</td>
                    </tr>
                    <tr>
                        <td><a class="btn blue" href="{{ route('admin.projetos.adicionar')}}">Adicionar</a></td>
                        <td><a class="btn teal lighten-2" href="{{ route('admin.projetos.editar', $registro->id)}}">Editar</a></td>
                        <td><a class="btn red" href= "#" >Deletar</a></td>
                    </tr>
                </table>
            </tbody>
        </div>  
    </div>
    
@endsection
