<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BancoDeSangue extends Model
{
    //Define a tabela deste model
    protected $table = 'banco_sangue';
    //Seta como falso o uso do timestamp
    public $timestamps = false;
}
