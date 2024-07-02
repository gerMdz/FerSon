<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'section_id' => ['required', 'exists:sections'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
