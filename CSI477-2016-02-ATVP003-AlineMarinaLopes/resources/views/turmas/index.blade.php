@extends('layout.principal')

@section('conteudo')

      <h1> DADOS DAS TURMAS</h1>


      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Nome
            </th>
            <th>
              Disciplina
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($turmas as $t)
            <tr>
              <td>
                <a href="/turmas/{{ $t->id }}">{{ $t->nome }}</a>
              </td>
              <td>
                {{ $t->disciplina->nome }}
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>
      <a href="/turmas/create" class="btn btn-primary">Adicionar</a>


@endsection
