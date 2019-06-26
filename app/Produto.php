<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false; //faz com que não grave informações de tempo

    protected $fillable = array('nome', 'descricao', 'quantidade', 'valor', 'tamanho', 'categoria_id'); //só deixa preencher esses campos

    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }
}
