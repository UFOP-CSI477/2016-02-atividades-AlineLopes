@extends('Admin.admin_template')

@section('content')

<h1>Listar Produtos</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th>
        Nome
      </th>
      <th>
        Preço
      </th>
      <th>
        Imagem
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $p)

      <tr>
        <td>
            <a href="/produto/{{$p->id}}">{{ $p -> nome }}</a>

        </td>
        <td>
          {{ $p -> preco }}
        </td>
        <td>
          <image img src="{{$p->imagem}}" alt="profile Pic" class="img-responsive" height="100" width="100" alt="Image"></image>
        </td>

      </tr>

    @endforeach
  </tbody>

</table>


@endsection
