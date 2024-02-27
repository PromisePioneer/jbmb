<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TawaranRequest extends FormRequest
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
            'motor_id' => ['required', 'exists:table_motor,id'],
            'user_id' => ['required', 'exists:users,id'],
            'hargaTawar' => ['required', 'numeric', 'max:255'],
        ];
    }
}
