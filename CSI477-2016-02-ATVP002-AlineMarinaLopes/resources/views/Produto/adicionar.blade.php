@extends('Admin.admin_template')

@section('content')

<h1>Cadastrar Produto</h1>

  <form class="" action="/produto" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="preco">Preço:</label>
          <input type="text" id="preco" name="preco" class="form-control" placeholder="Preço">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="file">Imagem:</label>
          <input type="file" name="imagem"></input>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
      </div>
    </div>

  </form>

@endsection
