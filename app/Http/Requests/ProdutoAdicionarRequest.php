<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoAdicionarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome'=>'required',
            'descricao'=>'required',
            'valor'=>'required',
            'quantidade'=>'required',
            'disponivel'=>'nullable',
        ];
    }

    public function messages(){
        return [
            'nome.required'=>'O Nome é obrigatório!',
            'descricao.required'=>'O descricao é obrigatório!',
            'valor.required'=>'O Preço é obrigratório!',
            'quantidade.required'=>'O Quantidade é obrigratório!',
        ];
    }
}
