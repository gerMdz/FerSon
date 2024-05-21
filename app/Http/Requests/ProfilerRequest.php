<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'job' => ['required'],
            'phone' => ['required'],
            'website' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'postal_code' => ['required'],
            'image' => ['required'],
            'user_id' => ['required', 'exists:users'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
