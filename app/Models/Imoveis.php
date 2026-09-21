<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Imoveis extends Model
{
    protected $table = "imoveis";

    protected $primaryKey = 'idImoveis';

    public $incrementing = true;

    protected $fillable = ['tipo', 'finalidade', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'uf', 'cep', 'descricao'];
}
