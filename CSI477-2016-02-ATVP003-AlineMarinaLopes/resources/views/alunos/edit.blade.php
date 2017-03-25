@extends('layout.principal')

@section('conteudo')

        <h1>Editar aluno</h1>

        <form method="post" action="/alunos/{{$aluno->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$aluno->nome}}">
              </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Rua: </label><br>
              <input type="text" class="form-control" name="rua" value="{{$aluno->rua}}">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Número: </label><br>
              <input type="text" class="form-control" name="numero" value="{{$aluno->numero}}">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Bairro: </label><br>
              <input type="text" class="form-control" name="bairro" value="{{$aluno->bairro}}">
            </div>
          </div>
          <div class="form-group row">

            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Cidade: </label><br>
              <input type="text" class="form-control" name="cidade" value="{{$aluno->cidade_id}}">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">CEP: </label><br>
              <input type="text" class="form-control" name="cep" value="{{$aluno->cep}}">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Email: </label><br>
              <input type="text" class="form-control" name="mail" value="{{$aluno->mail}}">
            </div>
          </div>
          </div>

          <input type="submit" class="btn btn-success" value="Salvar" />
          <a href="/alunos" class="btn btn-primary">Voltar</a>

        </form>

@endsection
