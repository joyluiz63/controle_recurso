@extends('layout.site')

@section('titulo', 'SEMSA-Recursos')

@section('conteudo')
  <div class="container">
    <h5 class='center'>Lista de Recursos </h5>
    <div class="row">
    {{-- MOSTRA DADOS DO BANCO --}}
       @foreach ($recursos as $recurso)
        <div class="col s12 m4">
         <div class="card">
           <div class="card-content">
             <h4>{{ $recurso->descrrecurso }}</h4>
             <p>{{ $recurso->destino }}</p>
           </div>
           <div class="card-action">
             <a href="#">Ver mais...</a>
           </div>
         </div>
        </div>
      @endforeach
 </div>
 <div class="row" >
   {{ $recursos->links() }} 
 </div>

  </div>


@endsection