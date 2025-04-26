<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMotelRequest extends FormRequest
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
            'nameOfPerson' => 'required|string|max:50',
            'phoneNumber' => 'required|string|max:10',
            'rentDate' => 'required|date',
            'remark' => 'nullable|max:255',
            'type' => 'required|string|max:255',
        ];
    }
}
