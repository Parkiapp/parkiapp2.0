<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NotificationController;

Route::post('/notify-booking', [NotificationController::class, 'notifyBooking']);
