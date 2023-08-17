<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastrolivrosrequest;
use App\Models\livrosmodel;
use Illuminate\Http\Request;

class CadastroLivrosController extends Controller
{
    public function create (cadastrolivrosrequest $request){
        $cadastroslivro = livrosmodel::create([
         'nome do livro' => $request->nomedolivro,
         'resumo' =>$request->resumo,
         'codigo do livro' => $request->codigodolivro,
         'imagens' => $request->email,
        ]);
        return response()->json([
            "success" => true,
            "message" => "usuario cadastrado com sucesso",
            "data"    => $cadastroslivro
        ],200);
       }
    }

