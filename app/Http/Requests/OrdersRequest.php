<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bairro' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'complemento' => 'nullable',
            'cep' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'pizza_id'=> 'required',
            'tamanho' => 'required',
            'preco_final' => 'required|numeric'
            //
        ];
    }
}
