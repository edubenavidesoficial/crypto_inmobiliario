<?php

namespace App\Http\Requests\BuyCart;

use Illuminate\Foundation\Http\FormRequest;

class OrderItemRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'order_id'=> 'required',
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required',
            'quantity' =>  'required',
            'code' => 'required',
            'transporte'=> 'required',
            'garantia_retorno'=> 'required',
            'seguro'=> 'required',
            'manejo_aduana'=> 'required',
            'cif'=> 'required',
            'impuesto_aduana'=> 'required',
            'cargos_totales_importacion'=> 'required',
            'precio_importacion'=> 'required',
            'subtotal'=> 'required',
            'costo_envio' => 'required',
            'total'=> 'required',
        ];
    }
}
