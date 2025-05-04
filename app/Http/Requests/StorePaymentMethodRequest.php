<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentMethodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

            'card_number'=> 'required_if:type,card|digits:16',
            'expiry_month'=> 'required_if:type,card|integer|min:1|max:12',
            'expiry_year'=> 'required_if:type,card|integer|min:' . date('Y'),
            'document'   => 'required_if:type,pse|string',
        ];
    }
}
