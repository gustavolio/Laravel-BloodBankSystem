<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function listarPessoas() {
        $pessoas = Pessoa::all();
        return view('index', [
            'pessoas' => $pessoas
        ]);
    }

    public function verPessoa(Pessoa $pessoa) {
        return view('verPessoa', [
            'pessoaAtual' => $pessoa
        ]);
    }

    public function formAdicionarPessoa() {
        return view('newPessoa');
    }

    public function storePessoa(Request $request){

        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->datanasc = $request->nasc;
        $pessoa->tipo_sanguineo = $request->tiposang;
        $pessoa->save();

        return redirect()->route('pessoas.listAll');
    }

    public function formEditPessoa(Pessoa $pessoa){
        
        return view('editPessoa', [
            'pessoa' => $pessoa
        ]);

    }

    public function edit(Pessoa $pessoa, Request $request){
        $pessoa->nome = $request->nome;
        $pessoa->cpf = $request->cpf;
        $pessoa->datanasc = $request->nasc;
        $pessoa->tipo_sanguineo = $request->tiposang;
        $pessoa->save();

        return redirect()->route('pessoas.listAll');
    }

    public function destroy(Pessoa $pessoa){
        $pessoa->delete();
        return redirect()->route('pessoas.listAll');
    }

    public function testePessoa(Pessoa $pessoa){
        dd($pessoa);
    }
}
