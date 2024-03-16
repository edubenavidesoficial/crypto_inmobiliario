<?php

namespace App\Http\Resources\BuyCart;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderPaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'id' => $this->id,
            'order_id' => $this->order_id,
            'order' => new OrderResource($this->order) ,
            'subtotal' => $this->subtotal,
            'shipment' => $this->shipment,
            'discount' => $this->discount,
            'tax' => $this->tax,
            'tax_percentage' => $this->tax_percentage,
            'total' => $this->total,
            'status' => $this->status,
            'voucher' => $this->voucher,
        ];
    }
}
