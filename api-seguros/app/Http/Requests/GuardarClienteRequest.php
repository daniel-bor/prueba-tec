<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class GuardarClienteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "nombre" => "required",
            "apellido" => "required",
            "telefono" => "required",
            "cui" => "required|unique:clientes,cui",
            "nit" => "required|unique:clientes,nit",
            "direccion" => "required",
            "fecha_nacimiento" => "required",
            "fecha_ingreso" => "required"
        ];
    }
}
