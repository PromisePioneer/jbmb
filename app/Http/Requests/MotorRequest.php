<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'merkMotor' => ['required', 'string', 'max:255'],
            'transmisi' => ['required', 'string', 'max:255'],
            'tahun' => ['required'],
            'masaPajak' => ['required'],
            'kilometer' => ['required', 'numeric'],
            'deskripsi' => ['required'],
            'kondisi_id' => ['required', 'exists:table_kondisi,id'],
            'harga' => ['required'],
            'jenis_id' => ['required', 'exists:table_jenis,id'],
            'foto' => ['required', 'mimes:jpg,jpeg,png'],
            'status' => ['required', 'boolean']
        ];
    }
}
