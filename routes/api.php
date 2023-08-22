<?php

use App\Http\Controllers\CadastroLivrosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('create',[CadastroLivrosController::class,'create']);

Route::get('/find/{id}' ,[CadastroLivrosController::class, 'pesquisarPorid']);