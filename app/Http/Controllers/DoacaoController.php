<?php

namespace App\Http\Controllers;

use App\Doacao;
use App\Pessoa;
use Illuminate\Http\Request;


//Controller geral para a aplicação
class DoacaoController extends Controller
{
    public function formAddDoacao(Pessoa $pessoa){
        return view('newDoacao', [
            'pessoa' => $pessoa
        ]);
    }

    public function storeDoacao(Request $request){

        $doacao = new Doacao();
        $doacao->id_pessoa = $request->id;
        $doacao->id_banco = 1;
        $doacao->tipo_sangue = $request->tipo_sanguineo;
        $doacao->quantidade = $request->quantidade;
        $doacao->data_doacao = $request->data_doacao;
        $doacao->tipo = $request->tipo;
        $doacao->save();

        return redirect()->route('pessoas.listAll');
    }

    public function listDoacao(){
        $doacoes = Doacao::all();

        return view('listDoacoes', [
            'doacoes' => $doacoes
        ]);
    }
}
