<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Src\App\GuardarImagenIndividual ;
use Src\Config\RutasStorage;

class RequestCliente extends FormRequest
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
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'address_line1' => 'required|string',
            'address_line2' => 'required|string',
            'zip_code' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'phone_number' => 'required|string',
            'instructions' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'identificacion_frontal' => 'required|string',
            'identificacion_posterior' => 'required|string',
        ];
    }
    public function prepareForValidation()
    {
        if ($this->identificacion_frontal) {
            $this->merge([
                'identificacion_frontal' => (new GuardarImagenIndividual($this->identificacion_frontal, RutasStorage::FOTOS_IDENTIFICACION_FRONTAL))->execute()
            ]);
        }
        if ($this->identificacion_posterior) {
            $this->merge([
                'identificacion_posterior' => (new GuardarImagenIndividual($this->identificacion_posterior, RutasStorage::FOTOS_IDENTIFICACION_POSTERIOR))->execute()
            ]);
        }
        $this->merge([
            'user_id' => Auth::user()->id
        ]);
    }
}
