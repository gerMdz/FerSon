<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'curso_id' => ['required', 'exists:cursos'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
