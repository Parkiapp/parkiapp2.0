<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

            'card_number'=> 'sometimes|required_if:type,card|digits:16',
            'expiry_month'=> 'sometimes|required_if:type,card|integer|min:1|max:12',
            'expiry_year'=> 'sometimes|required_if:type,card|integer|min:' . date('Y'),
            'document'   => 'sometimes|required_if:type,pse|string',
        ];
    }
}
