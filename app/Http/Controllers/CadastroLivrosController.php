<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastrolivrosrequest;
use App\Models\livrosmodel;
use Illuminate\Http\Request;

class CadastroLivrosController extends Controller
{
    public function create(cadastrolivrosrequest $request)
    {
        $cadastroslivro = livrosmodel::create([
            'nomeDoLivro' => $request->nomeDoLivro,
            'resumo' => $request->resumo,
            'codigoDoLivro' => $request->codigoDoLivro,
            'imagens' => $request->imagens,
        ]);
        return response()->json([
            "success" => true,
            "message" => "usuario cadastrado com sucesso",
            "data"    => $cadastroslivro
        ], 200);
    }
}
