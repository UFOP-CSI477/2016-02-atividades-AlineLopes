@extends('Cliente.area_cliente')

@section('content')

@foreach($compras as $c)

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading"> <h3>{{$c->produto->nome}}</h3></div>
        <div class="panel-heading">
        <label for="">Valor: {{$c->produto->preco}}</label><br>
        <label for="">Quantidade: {{$c->quantidade}}</label>
        </div>
      </div>
</div>

@endforeach
</div>
</div><br>
@endsection
