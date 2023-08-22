<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastrolivrosrequest;
use App\Models\Livro;
use App\Models\livrosmodel;
use Illuminate\Http\Request;

class CadastroLivrosController extends Controller
{
    public function create(cadastroLivrosrequest $request)
    {
        $cadastroslivro = Livro::create([
            'nomeDoLivro' => $request->nomeDoLivro,
            'resumo' => $request->resumo,
            'codigoDoLivro' => $request->codigoDoLivro,
            'imagens' => $request->imagens,
        ]);
        return response()->json([
            "success" => true,
            "message" => "livro Cadastrado com sucesso",
            "data"    => $cadastroslivro
        ], 200);
    }

    
   public function pesquisarPorid ($id){
    return Livro::find($id);
}

}
