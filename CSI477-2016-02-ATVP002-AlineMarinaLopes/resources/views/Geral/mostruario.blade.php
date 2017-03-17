@extends('Geral.geral_template')
@section('content')

@foreach($produtos as $p)

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading"> {{$p -> nome}}</div>
        <div class="panel-body" >    <image img src="{{$p -> imagem}}" alt="Logo" class="img-responsive" width='100%' height='100%' alt="Image"></image>
          <h3><i class="fa fa-money" aria-hidden="true"></i> {{$p -> preco}}</h3>
        </div>
        <div class="panel-footer text-center">
          <a href="/geral/{{$p->id}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
          @if(Auth::check())
            @if(Auth::user()->type ==2)
          <a href="#" class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add ao Carrinho</a>
          @endif
          @endif
          </div>
      </div>
    </div>

@endforeach
  </div>
</div><br>

</div><br><br>


@endsection
