<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePqrsRequest extends FormRequest
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
    public function rules()
    {
        return [
            'subject'     => 'required|string|max:150',
            'type'        => 'required|in:solicitud,queja,reclamo,sugerencia',
            'message'     => 'required|string|min:10',
            'attachment'  => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ];
    }