<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

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
                'imagens' => 'required',
              
            ];
       
    }

public function failedvalidation(Validator $validator)
{
throw new HttpResponseException(response()->json([
    'success' => false,
]));

}






}
