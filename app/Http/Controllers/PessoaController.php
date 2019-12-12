<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function adicionarPessoa() {
        $pessoa = new Pessoa();
        $pessoa->cpf = '06339123555';
        $pessoa->nome = 'Gustavo Lima de Oliveira';

        $data = date('Y-m-d', strtotime('2015-06-19-'));
        $pessoa->datanasc = $data->format('m-d-y H:i:s');

        $pessoa->tipo_sanguineo = 'B+';
        $pessoa->save();
    }
}
