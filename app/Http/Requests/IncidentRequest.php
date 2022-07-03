<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncidentRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'criticality_id' => 'required',
            'type_id' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'É obrigatório informar um título.',
            'description.required' => 'É obrigatório informar uma descrição.',
            'criticality_id.required' => 'É obrigatório selecionar uma criticidade.',
            'type_id.required' => 'É obrigatório selecionar um tipo.',
            'status.required' => 'É obrigatório informar um status.'
        ];
    }
}
