@extends('layout.main')
@section('title',$sala->nome)
@section('content')

<div class="col-md-10 offset-md-1" id="container-form-sala">
<h1>{{$sala->nome}}</h1>
<h3>Responsável: {{$sala->responsavel}}</h3>
<h4>Categoria: {{$sala->categoria}}</h4>


<input type="text" id="youtubeURL" value="{{$sala->link}}" readonly /> 
		<button onclick="carregar();" class="btn btn-primary">Vê Vídeo</button>
		<div id="youtubeRESULT"></div>
		<script src="youtube.js"></script>
		<script>
			function carregar(){
			var data = {
				youtubeURL : GetValueId("youtubeURL"),
				youtubeRESULT : "youtubeRESULT"
			};
			CreateYoutube(data);
		}
		</script>

</div>


@endsection