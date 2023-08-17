<?php

use App\Http\Controllers\CadastroLivrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('livros',[CadastroLivrosController::class,'livros']);