<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use App\Produto;
use App\User;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
       $this->middleware('auth');
     }
    public function index()
    {
      if(Auth::user()->type ==2){
        return view('Cliente.compra');
      }else {
          session()->flash('error','Disciplina: acesso não autorizado!');//mensagem configurada como padrão de err
          return redirect('/');
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function carrinho($id, Request $request){

      $this->validate($request,
      [
      'quantidade' => 'required',
      ]);

      $produto = Produto::find($id);
      $qtd = $request->quantidade;
      session()->get('carrinho');
      session()->push('carrinho',[$id,$qtd]);

      return $this->index()->with('success', 'Produto adicionado no carrinho com sucesso!');
    }

    public function showCarrinho(){
      $cart = session()->get('carrinho');
      return view('Cliente.carrinho')->with('cart', $cart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::user()->type ==2){

      $this->validate($request,
      [
      'user_id' => 'required',
      'produto_id' => 'required',
      'quantidade' => 'required',
      ]);

        $compras = new Compra;
        $compras->user_id = $request->user_id;
        $compras->produto_id = $request->produto_id;
        $compras->quantidade = $request->quantidade;
        $compras->save();

      return $this->index()->with('success', 'Compra realizada com sucesso!');
    }else {
        session()->flash('error','Disciplina: acesso não autorizado!');//mensagem configurada como padrão de err
        return redirect('/');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$compras = Compra::find($id);
    if(Auth::user()->type ==2){

      $compras = Compra::where('user_id',$id)->get();
      if(!$compras){
          abort(404);
      }
      return view('Cliente.showCompra')->with('compras', $compras);
    }else {
        session()->flash('error','Disciplina: acesso não autorizado!');//mensagem configurada como padrão de err
        return redirect('/');
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
