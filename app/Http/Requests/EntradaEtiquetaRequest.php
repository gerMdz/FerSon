<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntradaEtiquetaRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'entrada_id' => ['required', 'exists:entradas'],
            'etiqueta_id' => ['required', 'exists:etiquetas'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
