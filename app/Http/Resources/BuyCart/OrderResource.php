<?php

namespace App\Http\Resources\BuyCart;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'customer_id' => $this->customer_id,
            'status' => $this->status,
            'max_price' => $this->max_price,
            'is_gift' => $this->is_gift,
            'gift_message' => $this->gift_message,
            'payment_method' => $this->payment_method,
            'retailer_credentials' => $this->retailer_credentials,
            'webhooks' => $this->webhooks,
            'client_notes' => $this->client_notes,
            'order_item' => OrderItemResource::collection($this->orderItem) ,
        ];
    }
}
