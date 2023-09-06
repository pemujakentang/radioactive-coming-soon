<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamDataRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'tim1_penyiar1' => 'required|max:255',
            'tim1_penyiar2' => 'required|max:255',
            'tim1_operator' => 'required|max:255',
            'tim1_institusi' => 'required|max:255',
            'tim1_nims1' => 'required|max:255',
            'tim1_nims2' => 'required|max:255',
            'tim1_nimop' => 'required|max:255',
            'tim1_contact_wa' => 'required|max:255',
            'tim1_contact_line' => 'required|max:255',
            'payment_proof' => 'required|image|file|max:10240'
        ];
    }
}
