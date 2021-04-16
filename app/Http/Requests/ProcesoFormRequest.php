<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcesoFormRequest extends FormRequest
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
            'sede_id'     => '',
            'nombre'      => 'required|max:45',
            'lider'       => 'required',
            'requisitos'  => 'required',
            'alcance'     => 'required',
            'obj_esp'     => 'required',
            'recursos'    => 'required',
            'salidas'     => 'required',
            'estrategias' => 'required'
        ];
    }
}
