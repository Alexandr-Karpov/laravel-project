<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Nullable;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'phone'=> ['nullable', 'regex:/^\+380\d{3}\d{2}\d{2}\d{2}$/'],
            'location' => ['nullable', 'string', 'max:255'],
        ];
    }
}
