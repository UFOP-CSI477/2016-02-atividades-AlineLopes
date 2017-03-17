@extends('Admin.admin_template')

@section('content')

<h1>Dados do Produto</h1>

<form method="post" action="/produto/{{$produto->id}}" class="">
          <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
          {{method_field('DELETE')}}
          {{ csrf_field() }}

          <div class="form-group">
            <h4>
              {{$produto->nome}}
            </h4>
          </div>
          <div class="form-group">
            {{$produto->preco}}
          </div>
          <div class="form-group">
            <image img src="{{$produto->imagem}}" alt="profile Pic" class="img-responsive" height="200" width="200" alt="Image"></image>
          </div>


          <a href="/produto/{{$produto->id}}/edit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
Editar</a>
          @if(Auth::user()->type ==1)
          <button type="submit" class="btn btn-primary btn btn-danger" value="Excluir"> <span class="fa fa-trash"> Excluir</span> </button>
          @endif
          <a href="/produto" class="btn btn-primary"><i class="fa fa-undo" aria-hidden="true"></i>
Voltar</a>

</form>


@endsection
