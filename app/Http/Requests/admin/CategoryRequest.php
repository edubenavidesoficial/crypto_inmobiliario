<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Src\App\GuardarImagenIndividual;
use Src\Config\RutasStorage;
use Src\Shared\Utils;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string',
            'image' => 'required|string',
            'description' => 'required|string',
        ];
    }
    public function prepareForValidation()
    {
        if ($this->route()->getActionMethod() === 'update') {
            if ($this->image && Utils::esBase64($this->image)) {
                $this->merge([
                    'image' => (new GuardarImagenIndividual($this->image, RutasStorage::FOTOS_CATEGORY))->execute()
                ]);
            } else {
                unset($this->image);
            }
        }
        if ($this->route()->getActionMethod() === 'store') {
            if ($this->image) {
                $this->merge([
                    'image' => (new GuardarImagenIndividual($this->image, RutasStorage::FOTOS_CATEGORY))->execute()
                ]);
            }
        }
    }
}
