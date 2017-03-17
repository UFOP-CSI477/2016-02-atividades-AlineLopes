<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'GeralController');
Route::get('/login', function () {
    return view('login');
});
Route::get('showcart', 'CompraController@showCarrinho');

Route::post('cart/{$produto->id}', function($produto_id){
  return redirect()->action(
      'CompraController@carrinho', ['id' => $produto_id]
  );});


// Route::post('adicionar',function(){
//   request()->file('imagem')->store('imagems');
//
//   return back();
// });

Route::resource('admin', 'AdminController');
Route::resource('produto', 'ProdutosController');
Route::resource('geral','GeralController');
Route::resource('cliente','CompraController');
Route::resource('register','Auth\RegisterController');
Route::put('user/{user_id}','Auth\RegisterController@update');

// Route::get('admin', function () {
//     return view('Admin.admin_template');
// });

// Route::resource('admin', 'AdminController');
//
// Route::group(array('prefix' => 'admin'),'AdminController'{
//
//   // Route::get('listar', 'AdminController@listaProdutos');
//
//   // Route::get('listar', function(){
//   //   return 'Listar Produtos';
//   // });
//   Route::get('adicionar','AdminController@create');
//
//   //? para não ser obrigatório
//   // Route::get('editar/{id_produto}',function($id_produto){
//   //   return "Editar Produtos {$id_produto}";
//   // });
//   // Route::get('delete/{id_produto?}',function($id_produto=''){
//   //   return "Deletar Produtos {$id_produto}";
//   // });
// });

//
// Route::group(array('prefix' => 'operador'),function(){
//   Route::get('listar', function(){
//     return 'Listar Produtos';
//   });
//   //? para não ser obrigatório
//   Route::get('editar/{id_produto}',function($id_produto){
//     return "Editar Produtos {$id_produto}";
//   });

//
// });
//
// Route::group(array('prefix' => 'cliente'),function(){
//   Route::get('adicionarCarrinho',function(){
//     return 'Adicionar Produtos no Carrinho';
//   });
//   //? para não ser obrigatório
//   Route::get('editarCadastro/{id_produto}',function($id_produto){
//     return "Editar Cadastro {$id_produto}";
//   });
// });
//
// Route::group(array('prefix' => 'produto'),function(){
//   Route::get('consultar', function(){
//     return 'Consultar Produtos';
//   });
//   Route::get('visualizar',function(){
//     return 'visualizar Produtos';
//   });
// });

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
