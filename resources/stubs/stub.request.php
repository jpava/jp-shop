<?php

namespace {{ namespace }}\Requests;

use Illuminate\Foundation\Http\FormRequest;

class {{ class }}Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Agrega aquí las reglas de validación
            // 'name' => ['required', 'string', 'max:255'],
            // 'description' => ['nullable', 'string'],
        ];
    }
}
