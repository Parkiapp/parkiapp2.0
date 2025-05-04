
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PushSubscriptionController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    // Registrar suscripción Push del PWA
    Route::post('subscribe', [PushSubscriptionController::class, 'store']);
    // (aquí irán luego /notify, /book, etc.)
});

