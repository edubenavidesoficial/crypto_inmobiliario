<?php

namespace App\Http\Requests\BuyCart;

use Illuminate\Foundation\Http\FormRequest;

class OrderPaymentRequest extends FormRequest
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
            'order_id' =>'required',
            'subtotal' =>'required',
            'shipment' =>'required',
            'discount' =>'nullable',
            'tax' =>'required',
            'tax_percentage' =>'required',
            'total' =>'required',
            'status' =>'required',
            'voucher' =>'nullable',
        ];
    }
}
