<?php

namespace App\Http\Requests\BuyCart;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'customer_id' => 'required',
            'status' => 'required',
            'max_price' => 'required',
            'is_gift' => 'nullable',
            'gift_message' => 'nullable',
            'payment_method' => 'required',
            'retailer_credentials' => 'nullable',
            'webhooks' => 'nullable',
            'client_notes' => 'nullable',
            'product'=>'required',
        ];
    }
}
