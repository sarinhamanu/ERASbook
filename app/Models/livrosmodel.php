<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livrosmodel extends Model
{
    use HasFactory;

    protected $fillable= [
        'NomeDoLivro',
        'Resumo',
        'Autor',
        'códigoDoLivro',
        'imagens'
    ];
}
