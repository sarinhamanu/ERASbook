<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator as ValidationValidator;

class cadastrolivrosrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
           
                'nome do livro' => 'required',
                'resumo' => 'required',
                'codigo do livro' => 'required|unique',
               
              
            ];
       
    }
    public function failedValidation (Validator $validator){
        throw new HttpResponseException(response()->json([
            'sucess' => false,
            'error' => $validator->errors()
        ]));
    }

    public Function messages(){
        return [
            'nomeDoLivro.required'=> 'O campo nome do livro é obrigatorio',
            'resumo.required' =>'Resumo obrigatorio',
            'autor.required' => 'autor obrigatorio',
            'codigoDoLivro.unique' => 'formato de codigo invalido'
    
        ];
    }









}
