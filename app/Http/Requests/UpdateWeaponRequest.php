<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWeaponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'name' => 'required|string',
          'rarity' => 'required|integer',
          'class' => 'required|string',
          'base_atk' => 'required|numeric|regex:/^\d+(\.\d{1})?$/', // one decimal place
          '2nd_stat' => 'required|string',
          '2nd_stat_value_%' => 'required|numeric|regex:/^\d+(\.\d{2})?$/', // two decimal places
          'description' => 'required|string',        ];
    }
}
