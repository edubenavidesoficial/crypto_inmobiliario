<?php

namespace App\Http\Resources\BuyCart;

use Illuminate\Http\Resources\Json\JsonResource;

class CalculadoraImportacionResource extends JsonResource
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
            'nombre' => $this->nombre,
            'valor' => $this->valor,
        ];
    }
}
