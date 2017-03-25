@extends('layout.principal')

@section('conteudo')

        <h1>Adicionar aluno</h1>

        <form method="post" action="/alunos">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="">
              </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Rua: </label><br>
              <input type="text" class="form-control" name="rua" value="">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Número: </label><br>
              <input type="text" class="form-control" name="numero" value="">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Bairro: </label><br>
              <input type="text" class="form-control" name="bairro" value="">
            </div>
          </div>
          <div class="form-group row">

            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Cidade: </label><br>
              <select name="cidade_id" class="form-control">
                @foreach($cidades as $c)
                  <option value="{{$c->id}}"> {{$c->nome}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">CEP: </label><br>
              <input type="text" class="form-control" name="cep" value="">
            </div>
            <div class="form-group col-sm-4">
              <label for="" class="col-2 col-form-label">Email: </label><br>
              <input type="text" class="form-control" name="mail" value="">
            </div>
          </div>
          </div>

          <input type="submit" class="btn btn-success" value="Salvar" />
          <a href="/alunos" class="btn btn-primary">Voltar</a>

        </form>

@endsection
