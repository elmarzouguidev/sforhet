<?php

namespace App\Http\Requests\WEDOAPP\Candidat;

use Illuminate\Foundation\Http\FormRequest;

class CandidatFormRequest extends FormRequest
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
            'adresse' => ['required', 'string'],
            'quartier' => ['required', 'string'],
            'ville' => ['required', 'string', 'max:100'],
            'diplome' => ['required', 'string', 'max:100'],
            'filiere' => ['required', 'string', 'max:100'],
            'date_nissance' => ['required', 'date', 'date_format:d/m/Y'],
            'offre' => ['sometimes', 'nullable', 'uuid', 'exists:offres,uuid'],
        ];
    }
}
