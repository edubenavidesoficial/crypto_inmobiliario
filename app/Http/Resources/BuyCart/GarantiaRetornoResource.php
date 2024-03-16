<?php

namespace App\Http\Resources\BuyCart;

use Illuminate\Http\Resources\Json\JsonResource;

class GarantiaRetornoResource extends JsonResource
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
            'valor_minimo' => $this->valor_minimo,
            'valor_maximo' => $this->valor_maximo,
            'precio_garantia' => $this->precio_garantia,
        ];
    }
}
