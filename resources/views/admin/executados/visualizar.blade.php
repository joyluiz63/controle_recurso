@extends('layout.site')

@section('titulo', 'Recursos')

@section('conteudo')

    <div class="container">
        <h3 class='center'>Lista de Recursos </h3>
        <div class="row">
            <tbody>
                <table>            
                    <tr>
                        <th>Id</th> <td>{{ $registro->id }}</td>
                    </tr>
                    <tr>
                        <th>Descrição</th> <td>{{ $registro->descrrecurso }}</td>
                    </tr>
                    <tr>
                        <th>Documento</th> <td>{{ $registro->numprocesso }}</td>
                    </tr>
                    <tr>
                        <th>Origem</th> <td>{{ $registro->origem }}</td>
                    </tr>
                    <tr>
                        <th>Objeto</th> <td>{{ $registro->objeto }}</td>
                    </tr>
                    <tr>
                        <th>Destino</th> <td>{{ $registro->destino }}</td>
                    </tr>
                    <tr>
                        <th>Valor</th> <td>valor de outra tabel</td>
                    </tr>
                    <tr>
                        <td><a class="btn blue" href="{{ route('admin.recursos.adicionar')}}">Adicionar</a></td>
                        <td><a class="btn teal lighten-2" href="{{ route('admin.recursos.editar', $registro->id)}}">Editar</a></td>
                        <td><a class="btn red" href= "#" >Deletar</a></td>
                    </tr>
                </table>
            </tbody>
        </div>  
    </div>
    
@endsection
