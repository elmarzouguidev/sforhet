<?php

namespace App\Http\Requests\WEDOAPP\Entreprise;

use Illuminate\Foundation\Http\FormRequest;

class EntrepriseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required', 'string', 'max:100'],
            'prenom' => ['required', 'string', 'max:100'],
            'phone' => ['nullable', 'string', 'max:30', 'phone:MA'],
            //'adresse' => ['required', 'string'],
            'fonction' => ['required', 'string'],
            'raison_sociale' => ['required', 'string', 'max:100'],
            'ville' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:filter', 'max:100'],
            'demande' => ['required', 'string'],
        ];
    }
}
