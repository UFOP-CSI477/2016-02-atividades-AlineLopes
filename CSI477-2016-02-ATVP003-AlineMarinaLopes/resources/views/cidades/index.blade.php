@extends('layout.principal')

@section('conteudo')

      <h1> DADOS DAS CIDADES</h1>


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
          @foreach($cidades as $c)
            <tr>
              <td>
                <a href="/cidades/{{ $c->id }}">{{ $c->nome }}</a>
              </td>
              <td>
                {{ $c->estado->nome }}
              </td>
              </tr>

          @endforeach
        </tbody>

      </table>
      <a href="/cidades/create" class="btn btn-primary">Adicionar</a>


@endsection
