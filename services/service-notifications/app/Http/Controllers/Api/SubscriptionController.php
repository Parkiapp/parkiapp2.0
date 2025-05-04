<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request \$request)
    {
        \$data = \$request->validate([
            'endpoint' => 'required|string',
            'p256dh'   => 'required|string',
            'auth'     => 'required|string',
        ]);
        \$data['user_id'] = \$request->user()->id;
        Subscription::updateOrCreate(
            ['endpoint' => \$data['endpoint']],
            \$data
        );
        return response()->json(['message'=>'Subscribed']);
    }
}
