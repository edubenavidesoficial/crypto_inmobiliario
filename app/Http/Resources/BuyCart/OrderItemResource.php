<?php

namespace App\Http\Resources\BuyCart;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Src\App\BuyCartService;

class OrderItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'code' => $this->code,
            'subtotal' => $this->subtotal,
            'impuesto_aduana' => $this->impuesto_aduana,
            'costo_envio' => $this->costo_envio,
            'total' => $this->total,
            'order_id' => $this->order_id,
            'status' => $this->order!==null ? $this->order?->status:'',
            'fecha_creacion' => Carbon::parse($this->created_at)->locale('es')->isoFormat('DD MMMM, YYYY'),
            'detalle_producto' => BuyCartService::detalle_producto($this->code)->json()
        ];
    }
}
