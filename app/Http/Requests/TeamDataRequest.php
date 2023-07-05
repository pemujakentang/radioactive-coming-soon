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
            'penyiar1' => 'required|max:255',
            'penyiar2' => 'required|max:255',
            'operator' => 'required|max:255',
            'institusi' => 'required|max:255',
            'nims1' => 'required|max:255',
            'nims2' => 'required|max:255',
            'nimop' => 'required|max:255',
            'contact_wa' => 'required|max:255',
            'contact_line' => 'required|max:255',
            'payment_proof' => 'required|image|file|max:10240'
        ];
    }
}
