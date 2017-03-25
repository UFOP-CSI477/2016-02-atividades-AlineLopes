@extends('layout.principal')

@section('conteudo')

        <h1>Exibir aluno</h1>

        <form method="post" action="/alunos/{{$aluno->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('DELETE')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: {{$aluno->nome}}</label><br>
                <!-- <input type="text" class="form-control" name="name" value="{{$aluno->nome}}"> -->
              </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Rua: {{$aluno->rua}} </label><br>
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Número: {{$aluno->numero}}</label><br>
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Bairro: {{$aluno->bairro}}</label><br>
            </div>
          </div>
          <div class="form-group row">
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Cidade: {{$aluno->cidade->nome}}</label><br>
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">CEP: {{$aluno->cep}}</label><br>
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Email: {{$aluno->mail}}</label><br>
            </div>
          </div>
          </div>


          <a href="/alunos/{{$aluno->id}}/edit" class="btn btn-primary">Editar</a>
          <input type="submit" class="btn btn-danger" value="Excluir"/>
          <a href="/alunos" class="btn btn-primary">Voltar</a>

        </form>

@endsection
