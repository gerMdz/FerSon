<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'address' => ['required'],
            'ciudad' => ['required'],
            'pais' => ['required'],
            'postal_code' => ['required'],
            'profiler_id' => ['required', 'exists:profilers'],];
    }

    public function authorize(): bool
    {
        return true;
    }
}
