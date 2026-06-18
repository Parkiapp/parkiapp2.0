<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PushSubscriptionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí definimos las rutas que serán consumidas por la SPA (Vue 3).
| Asegúrate de tener Sanctum configurado correctamente en config/sanctum.php
| y tener middleware CORS activo en app/Http/Kernel.php.
|
*/

// Ruta protegida que retorna el usuario autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Grupo de rutas públicas para la API (por ejemplo, suscripciones push)
Route::middleware('api')->group(function () {
    // Endpoint para registrar suscripciones Push del PWA
    Route::post('/subscribe', [PushSubscriptionController::class, 'store']);

    // Aquí puedes añadir otros endpoints públicos o protegidos
    // Route::post('/notify', [PushSubscriptionController::class, 'notify']);
});

