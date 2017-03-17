@extends('Geral.geral_template')

@section('content')


<div class="col-sm-12">
  <form method="POST" action="/cliente" class="text-center">
            <!-- patch tem barra disciplinas/alguma coisa, se n tiver o action correto dá erro -->
            {{ csrf_field() }}

            <div class="col-sm-2">

            </div>

            <div class="col-sm-3">

                <image img src="{{$produto->imagem}}" alt="Logo" class="img-responsive" height="100%" width="100%" alt="Image"></image>

            </div>
            <div class="col-sm-7">
                <h3>
                  {{$produto->nome}}
                </h3>
            </div>

            <div class="col-sm-7">
                <h3>
                  R$ {{$produto->preco}}
                </h3>

            </div>

            <div class="col-sm-3">

            </div>
            @if(Auth::check())
            @if(Auth::user()->type ==2)
            <div class="form-group col-sm-1">
              <label for="sel1">Quantidade</label>
              <select class="form-control" id="quantidade" name="quantidade">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
            </div>
            <div class="col-sm-3">
              <input id="user_id" name="user_id" type="hidden" value="{{ Auth::user()->id }}"></input>
              <input id="produto_id" name="produto_id" type="hidden" value="{{$produto->id}}"></input>
            </div>
            <div class="col-sm-5">

            </div>
            <div class="col-sm-7">

              <!-- <a href="cart/{{$produto->id}}" type="submit" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add ao Carrinho</a> -->
              <button type="submit" class="btn btn-success"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Finalizar Comprar</button>

            </div>
          @endif
          @endif
  </form>
</div>

@endsection
