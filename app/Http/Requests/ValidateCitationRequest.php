<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateCitationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $citation = $this->route('citation');

        return [
            'description' => 'required|max:50',
            'date' => 'required|max:24',
            'is_active' => 'boolean',
        ];
    }
}
