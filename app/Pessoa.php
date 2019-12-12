<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //Define a tabela deste model
    protected $table = 'pessoas';
    //Seta como falso o uso do timestamp
    public $timestamps = false;
}
