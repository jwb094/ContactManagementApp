<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
       'title' => 'nullable|string|max:20',
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'email' => 'nullable|email|max:255',
        'phone' => 'nullable|string|max:30',
        'date_of_birth' => 'nullable|string',
        'address_line_1' => 'required|string|max:255',
        'address_line_2' => 'nullable|string|max:255',
        'town_city' => 'nullable|string|max:100',
        'county' => 'nullable|string|max:100',
        'post_code' => 'required|string|max:20',
        'is_favourite' => 'nullable|boolean',
        'facebook' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'linkedin' => 'nullable|string|max:255',
        ];
    }
}
