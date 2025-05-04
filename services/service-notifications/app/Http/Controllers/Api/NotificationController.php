<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PushSubscription;      // Ajusta al nombre de tu modelo
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

class NotificationController extends Controller
{
    public function notifyBooking(Request \$request)
    {
        // Carga la suscripción del usuario (ajusta nombre de tabla/modelo)
        \$sub = PushSubscription::where('user_id', \$request->user_id)->firstOrFail();

        \$subscription = Subscription::create([
            'endpoint'        => \$sub->endpoint,
            'publicKey'       => \$sub->public_key,
            'authToken'       => \$sub->auth_token,
            'contentEncoding' => \$sub->content_encoding,
        ]);

        \$webPush = new WebPush([
            'VAPID' => [
                'subject'    => 'mailto:you@parkapp.com',
                'publicKey'  => env('VAPID_PUBLIC_KEY'),
                'privateKey' => env('VAPID_PRIVATE_KEY'),
            ],
        ]);

        // Envía una notificación push
        \$webPush->sendOneNotification(
            \$subscription,
            json_encode([
                'title'   => \$request->title,
                'message' => \$request->message,
            ])
        );

        return response()->json(['sent' => true]);
    }
}
