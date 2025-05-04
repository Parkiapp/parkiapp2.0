<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationHistoryFilterRequest extends FormRequest
{
    public function authorize() { return true; }
    public function rules(): array
    {
        return [
            'status' => 'nullable|in:confirmed,cancelled,completed',
            'from'   => 'nullable|date',
            'to'     => 'nullable|date|after_or_equal:from',
        ];
    }
}
