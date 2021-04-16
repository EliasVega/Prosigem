<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoFormRequest extends FormRequest
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
            'empresa_id'  => '',
            'sede_id'     => '',
            'proceso_id'  => 'required',
            'nombre'      => 'required',
            'jefe'        => 'required|max:100',
            'subcargos'   => 'required',
            'rol'         => 'required',
            'func_cargo'  => 'required',
            'resp_cargo'  => 'required',
            'resp_sgi'    => 'required',
            'autoridad'   => 'required',
            'rend_ctas'   => 'required',
            'educacion'   => 'required|max:20',
            'formacion'   => 'required|max:20',
            'experiencia' => 'required',
            'habilidades' => 'required',
        ];
    }
}
