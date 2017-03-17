@extends('Cliente.area_cliente')

@section('content')

<h1>Listar Produtos</h1>

    @foreach($cart as $c)

            <a href="/showcart">{{ $a[0]}}</a>

    @endforeach

@endsection
