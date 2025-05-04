<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'make'  => 'required|string|max:50',
            'model' => 'required|string|max:50',
            'plate' => 'required|string|unique:vehicles,plate',
            'color' => 'nullable|string|max:30',
        ];
    }
}
