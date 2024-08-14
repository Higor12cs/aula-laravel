<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string',
            'linkedin' => 'nullable|string',
            'github' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'course_id.required' => 'O campo curso é obrigatório.',
            'course_id.exists' => 'O curso informado não foi encontrado.',
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser um texto válido.',
            'linkedin.string' => 'O campo Linkedin deve ser um texto válido.',
            'github.string' => 'O campo GitHub deve ser um texto válido.',
        ];
    }
}
