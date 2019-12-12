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

Route::get('doesangue','PessoaController@adicionarPessoa' );