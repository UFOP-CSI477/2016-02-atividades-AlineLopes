<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
      if(Auth::user()->type ==1){

        //$produtos = Produto::all();
        return view('Produto.index');
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
      if(Auth::user()->type ==1){

      //return view('Admin.partials.adicionar');
        return view('Produto.adicionar');
      }else {
          session()->flash('error','Disciplina: acesso não autorizado!');//mensagem configurada como padrão de err
          return redirect('/');
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->type ==1){
        request()->file('imagem')->store('imagems');

        return back();
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
      return 'Listar Produto';

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return "Editar {$id}";
      // $produto = Produto::findOrFail($id);
      //         return view('produtos.edit')->with('produto', $aluno);
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
      return 'Remover Produto';

    }


}
