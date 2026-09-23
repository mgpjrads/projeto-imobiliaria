<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Clientes';

    protected $primaryKey = 'idClientes';

    public $incrementing = true;

    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'telefone',
        'email',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];
}
