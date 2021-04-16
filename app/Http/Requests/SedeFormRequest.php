<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SedeFormRequest extends FormRequest
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
            'departamento_id' => 'required',
            'municipio_id'    => 'required',
            'empresa_id'      => '',
            'actEco_id'       => 'required',
            'arl_id'          => 'required',
            'nombre'          => 'required|max:50',
            'nit'             => 'required|max:20',
            'direccion'       => 'required|max:50',
            'telefono'        => 'max:15',
            'celular'         => 'max:15',
            'nivel_riesgo'    => 'required',
            'gerente'         => 'required|max:50',
        ];
    }
}
