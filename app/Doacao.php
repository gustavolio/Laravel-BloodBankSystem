<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    //Define a tabela deste model
    protected $table = 'doacao';
    //Seta como falso o uso do timestamp
    public $timestamps = false;
}
