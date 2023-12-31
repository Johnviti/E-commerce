<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'codigo' => 'required',
            'descricao' => 'required',
            'unidade' => 'required',
            'peso' => 'required',
            'preco' => 'required',
            'id_categoria_produto' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'codigo.required' => 'O campo código é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'unidade.required' => 'O campo unidade é obrigatório',
            'peso.required' => 'O campo peso é obrigatório',
            'preco.required' => 'O campo preço é obrigatório'
        ];
    }
}
