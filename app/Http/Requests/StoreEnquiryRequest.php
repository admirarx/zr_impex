<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'min:7', 'max:25'],
            'email' => ['nullable', 'email', 'max:100'],
            'company_name' => ['nullable', 'string', 'max:150'],
            'city' => ['nullable', 'string', 'max:100'],
            'message' => ['nullable', 'string', 'max:3000'],
            'product_id' => ['nullable', 'exists:products,id'],
            'source' => ['nullable', 'string', 'in:contact_form,quote_form,whatsapp_click'],
            'b_name' => ['nullable', 'string'], // Honeypot field
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name.',
            'phone.required' => 'Please enter a valid phone number so our team can reach you.',
        ];
    }
}
