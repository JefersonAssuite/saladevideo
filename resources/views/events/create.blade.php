@extends('layout.main')
@section('title','Criar Sala')
@section('content')

<form role="form" id="container-form-sala" action="/events" method="POST">
  @csrf
      <h1>Criando Sala</h1>
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputName">Nome</label>
                    <input type="text" class="form-control" id="nomeSala" placeholder="Digite o nome da sala" name="nomeSala" >
                  </div>
                <div class="form-group">
                    <label for="exampleInputName">Categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="" selected="selected">Selecione uma Categoria</option>
                        <option value="Gastronomia">Gastronomia</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Satisfatorios">Videos Satisfatórios</option>
                    </select>
                </div>
                  
                  <div class="form-group">
                  <label for="exampleInputName">Sala Restrita?</label>
                    <select class="form-control" name="privada" id="privada">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName">Carregar Vídeo:</label>
                      <input type="text" class="form-control" id="link" placeholder="Insira um link:" name="link" >
                    </div>
                  
                  <div class="form-group">
                    <label for="exampleInputName">Nome do Responsável</label>
                    <input type="text" class="form-control" id="responsavel" placeholder="Digite o nome" name="responsavel">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="senha"  name="senha">
                  <p>*Obs:A senha só será necessária caso a sala seja privada!</p>
                </div>
                  
                <!-- /.box-body -->          
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">Salvar</button>
                </div>

</form>


@endsection