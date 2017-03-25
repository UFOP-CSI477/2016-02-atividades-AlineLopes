@extends('layout.principal')

@section('conteudo')

        <h1>Adicionar turma</h1>

        <form method="post" action="/turmas">
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
            <div class="form-group col-sm-6">
              <label for="" class="col-2 col-form-label">Disciplina: </label><br>
              <select name="disciplina_id" class="form-control">
                @foreach($disciplinas as $d)
                  <option value="{{$d->id}}"> {{$d->nome}}</option>
                @endforeach
              </select>
            </div>

          </div>
          </div>

          <input type="submit" class="btn btn-success" value="Salvar" />
          <a href="/turmas" class="btn btn-primary">Voltar</a>

        </form>

@endsection
