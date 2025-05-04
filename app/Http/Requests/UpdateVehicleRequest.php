<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'make'  => 'sometimes|required|string|max:50',
            'model' => 'sometimes|required|string|max:50',
            'plate' => 'sometimes|required|string|unique:vehicles,plate,' . \$this->route('vehicle')->id,
            'color' => 'nullable|string|max:30',
        ];
    }
}
