<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produto;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produtos = Produto::all();
      return view('Produto.index')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       return view('Produto.adicionar');
       //return  $this->store();
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
      //  request()->file('imagem')->store('imagems');
       //
      //  Produto::create($request->all());
       //
      //  return back()->with('message', 'Produto Cadastrado com sucesso!');
      //   redirect('Produto.adicionar');
        $this->validate($request, [
        'nome' => 'required',
        'preco' => 'required',
        'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('imagem')) {
          $file = Input::file('imagem');

          $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

          $nome = $timestamp. '-' .$file->getClientOriginalName();

          $imagem = new \stdClass();//instanciando
          $imagem->filePath = $nome;

          $file->move(public_path().'/img/', $nome);
          $teste = '/img/'.$nome;
          $produtos = new Produto;
          $produtos->nome = $request->nome;
          $produtos->preco = $request->preco;
          $produtos->imagem = $teste;
          $produtos->save();
        }

        return $this->create()->with('success', 'Produto cadastrado com sucesso!');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $produto = Produto::find($id);
      if(!$produto){
          abort(404);
      }
      return view('Produto.show')->with('produto', $produto);
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $produto = Produto::find($id);
      if(!$produto){
          abort(404);
      }

      return view('Produto.edit')->with('produto', $produto);
      //
      // $produto = Produto::find($id);
      // return view('Produto.edit')->with('produto',$produto);
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
      $this->validate($request, [
      'nome' => 'required',
      'preco' => 'required',
      'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      if($request->hasFile('imagem')) {
        $file = Input::file('imagem');

        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

        $nome = $timestamp. '-' .$file->getClientOriginalName();

        $imagem = new \stdClass();//instanciando
        $imagem->filePath = $nome;

        $file->move(public_path().'/img/', $nome);
        $teste = '/img/'.$nome;
        $produtos = Produto::find($id);
        $produtos->nome = $request->nome;
        $produtos->preco = $request->preco;
        $produtos->imagem = $teste;
        $produtos->save();
        return redirect ('produto')->with('message', 'Produto Atualizado com Sucesso!');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $produto = Produto::find($id);
      $produto->delete();
      return redirect('produto')->with('message', 'Produto apagado com sucesso!');
    }
}
