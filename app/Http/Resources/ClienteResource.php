<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $modelo = [
            'id' => $this->id,
            'nombres'=> $this->nombres,
            'apellidos'=> $this->apellidos,
            'address_line1'=> $this->address_line1,
            'address_line2'=> $this->address_line2,
            'zip_code'=> $this->zip_code,
            'city'=> $this->city,
            'state'=> $this->state,
            'country'=> $this->country,
            'phone_number'=> $this->phone_number,
            'instructions'=> $this->instructions,
            'identificacion_frontal' => $this->identificacion_frontal ? url($this->identificacion_frontal) : null,
            'identificacion_posterior' => $this->identificacion_posterior ? url($this->identificacion_posterior) : null,
        ];
        return $modelo;
    }
}
