<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livrosmodel extends Model
{
    use HasFactory;

    protected $fillable= [
        'Nome do livro',
        'Resumo',
        'Autor',
        'código do livro',
        'imagens'
    ];
}
