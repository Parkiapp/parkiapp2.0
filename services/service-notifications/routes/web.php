<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NotificationController;

// Health-check rápido
Route::get('/', function () {
    return response()->json(['status' => 'Notifications service running']);
});

// Dispara notificación de booking
Route::post('/api/notify-booking', [NotificationController::class, 'notifyBooking']);
