<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFormRequest extends FormRequest
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
            'nombre'            => 'required|max:45',
            'asesor'            => 'required|max:100',
            'servicio'          => 'required',
            'inicio_servicio'   => 'required',
            'fin_servicio'      => 'required',
            'fecha_facturacion' => 'required',
            'estado'            => '',
            'logo'              => '',
        ];
    }
}
