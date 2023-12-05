<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    protected $fillable = [
        'codigo',
        'descricao',
        'unidade',
        'peso',
        'preco',
        'id_categoria_produto',
    ];

    // $users = User::factory()->count(3)->make();

}
