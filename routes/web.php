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

Route::get('/', 'PessoaController@listarPessoas');

/**
 *  - O primeiro parametro é a uri (final url)
 *  - O segundo é o metodo executado ao abrir aquela página,
 *  este metodo fica no controller.
 */

 
//  GET
//  - Pessoas
Route::get('doesangue/doacoes','DoacaoController@listDoacao')->name('doacao.listAll');
Route::get('doesangue','PessoaController@listarPessoas')->name('pessoas.listAll');
Route::get('doesangue/novo','PessoaController@formAdicionarPessoa')->name('pessoas.formAddPessoa');
Route::get('doesangue/editar/{pessoa}','PessoaController@formEditPessoa')->name('pessoas.formEditPessoa');
Route::get('doesangue/{pessoa}','PessoaController@verPessoa')->name('pessoas.list');
// -Doacao


Route::get('doesangue/doacao/{pessoa}', 'DoacaoController@formAddDoacao')->name('doacao.formAddDoacao');

// POST
// - Pessoas
Route::post('pessoa/store', 'PessoaController@storePessoa')->name('pessoas.store');
Route::post('doacao/store', 'DoacaoController@storeDoacao')->name('doacao.store');

// PUT
// - Pessoas
Route::put('pessoa/edit/{pessoa}', 'PessoaController@edit')->name('pessoas.edit');

//DELETE
// - Pessoas
Route::delete('pessoa/destroy/{pessoa}', 'PessoaController@destroy')->name('pessoa.destroy');
