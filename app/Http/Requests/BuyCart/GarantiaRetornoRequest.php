<?php

namespace App\Http\Requests\BuyCart;

use Illuminate\Foundation\Http\FormRequest;

class GarantiaRetornoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'valor_minimo'=> 'required|numeric',
            'valor_maximo'=> 'required|numeric',
            'precio_garantia'=> 'required|numeric',
        ];
    }
}
