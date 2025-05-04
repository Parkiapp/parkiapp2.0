<?php
namespace AppHttpControllersApi;
use AppModelsPushSubscription;
use IlluminateHttpRequest;
use IlluminateRoutingController;
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PushSubscriptionController extends Controller
{
    //
}

    /**
     * Almacena o actualiza la suscripción Push del usuario.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'endpoint'         => 'required|url',
            'public_key'       => 'required|string',
            'auth_token'       => 'required|string',
            'content_encoding' => 'required|string',
        ]);

        PushSubscription::updateOrCreate(
            ['endpoint' => $data['endpoint']],
            array_merge($data, ['user_id' => auth()->id()])
        );

        return response()->json(['message' => 'Suscripción guardada']);
    }
