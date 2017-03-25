@extends('layout.principal')

@section('conteudo')

        <h1>Editar turma</h1>

        <form method="post" action="/turmas/{{$turma->id}}">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('PATCH')}}
          {{ csrf_field() }}
          <div class="form-group col-sm-12">


          <div class="form-group row">
              <div class="col-sm-12">
                <label for="">Nome: </label><br>
                <input type="text" class="form-control" name="nome" value="{{$turma->nome}}">
              </div>
          </div>

          <div class="form-group row">
            <div class="form-group col-sm-6">
              <label for="" class="col-2 col-form-label">Disciplina: </label><br>
              <input type="text" class="form-control" name="disciplina_id" value="{{$turma->disciplina_id}}">

            </div>

          </div>
          </div>

          <input type="submit" class="btn btn-success" value="Salvar" />
          <a href="/turmas" class="btn btn-primary">Voltar</a>

        </form>

@endsection
