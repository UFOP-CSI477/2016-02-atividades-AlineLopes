@extends('layout.principal')

@section('conteudo')

      <h1> DADOS DOS ESTADOS</h1>


      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              Nome
            </th>
            <th>
              Estado
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($estados as $e)
            <tr>
              <td>
                <a href="/estados/{{ $e->id }}">{{ $e->nome }}</a>
              </td>
              <td>
                {{ $e->sigla }}
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>


@endsection
