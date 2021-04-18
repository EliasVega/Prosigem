<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvocatoriaFormRequest extends FormRequest
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
            'empresa_id' => '',
            'sede_id' => '',
            'user_id' => '',
            'codigo' => '',
            'nombre' => 'required|max:100',
            'version' => '',
            'fecha' => '',
            'hora' => 'required|max:6',
            'rep_legal' => 'required|max:50',
        ];
    }
}
