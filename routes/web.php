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

Route::get('/', function () {
    return view('welcome');
});

/**
 *  - O primeiro parametro é a uri (final url)
 *  - O segundo é o metodo executado ao abrir aquela página,
 *  este metodo fica no controller.
 */

//  GET
Route::get('doesangue','PessoaController@listarPessoas')->name('pessoas.listAll');
Route::get('doesangue/novo','PessoaController@formAdicionarPessoa')->name('pessoas.formAddPessoa');
Route::get('doesangue/editar/{pessoa}','PessoaController@formEditPessoa')->name('pessoas.formEditPessoa');
Route::get('doesangue/{pessoa}','PessoaController@verPessoa')->name('pessoas.list');

// POST
Route::post('pessoa/store', 'PessoaController@storePessoa')->name('pessoas.store');

// PUT
Route::put('pessoa/edit/{pessoa}', 'PessoaController@edit')->name('pessoas.edit');

//DELETE
Route::delete('pessoa/destroy/{pessoa}', 'PessoaController@destroy')->name('pessoa.destroy');
