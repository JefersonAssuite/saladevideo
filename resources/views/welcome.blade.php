@extends('layout.main')
@section('title','Bloom')
@section('content')

<div class="col md-3" id="welcome" >
<h1>Salas Disponíveis</h1>
<div id="events-container" class="col-md-12">


<div id="cards-container" class="row">
            @foreach($salas as $sala)
            <div class="card col-md-3" >
               <div class="card-body">
                  <small>Nome da Sala:</small><h5 class="card-title">{{$sala->nome}}</h5>
                  <small>Categoria:</small><p class="card-categoria">{{$sala->categoria}}</p>
                  <small>Responsável:</small><p class="card-responsavel" id="privada"> {{$sala->responsavel}}</p>
                  <a href="/events/{{$sala->id}}" class="btn btn-primary"> Entrar</a>
               </div>
            </div>
            @endforeach

</div>
</div>
@endsection