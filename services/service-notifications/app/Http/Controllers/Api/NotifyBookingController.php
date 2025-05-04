<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription as VAPIDSub;
use App\Models\Subscription;

class NotifyBookingController extends Controller
{
    public function notify(Request \$request)
    {
        \$req = \$request->validate([
            'user_id' => 'required|exists:users,id',
            'title'   => 'required|string',
            'message' => 'required|string',
        ]);
        \$vapid = [
            'subject'    => 'mailto:you@yourdomain.com',
            'publicKey'  => env('VAPID_PUBLIC_KEY'),
            'privateKey' => env('VAPID_PRIVATE_KEY'),
        ];
        \$webPush = new WebPush(['VAPID' => \$vapid]);
        Subscription::where('user_id', \$req['user_id'])->get()->each(function(\$sub) use (\$webPush, \$req) {
            \$vapidSub = VAPIDSub::create([
                'endpoint' => \$sub->endpoint,
                'keys' => ['p256dh'=>\$sub->p256dh,'auth'=>\$sub->auth],
            ]);
            \$webPush->sendNotification(\$vapidSub, json_encode([
                'title'=>\$req['title'],
                'message'=>\$req['message'],
            ]));
        });
        return response()->json(['message'=>'Notifications queued']);
    }
}
