@extends('Admin.admin_template')

@section('content')

<h1>Cadastrar Produto</h1>

  <form class="" action="/produto/{{$produto->id}}" method="POST" enctype="multipart/form-data">
    {{method_field('PATCH')}}
    {{ csrf_field() }}

    <div class="row">
      <div class="col-md-6">
        @if(Auth::user()->type ==1)
        <div class="form-group">
          <label for="firstname">Nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{$produto->nome}}">
        </div>
        @else
        <div class="form-group">
          <label for="firstname">Nome:</label>
          <p class="form-control">{{$produto->nome}}</p>
          <input type="hidden" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{$produto->nome}}">
        </div>
        @endif
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="lastname">Preço:</label>
          <input type="text" id="preco" name="preco" class="form-control" placeholder="Preço" value="{{$produto->preco}}">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="file">Imagem:</label>
          <input type="file" name="imagem" value="{{$produto->imagem}}"></input>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <div class="form-group">
          <button type="submit" class="btn btn-success">Salvar</button>
          <a href="/produto" class="btn btn-primary">Voltar</a>

        </div>
      </div>
    </div>

  </form>

@endsection
