<?php

Route::get('/oferente/dashboard', [App\Http\Controllers\ParkioferenteDashboardController::class,'__invoke'])->name('oferente.dashboard');
Route::get('/parkidor/confirm', [App\Http\Controllers\ParkidorController::class, 'confirm'])->name('parkidor.confirm');
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('personal', PersonalController::class);
});

// ───────────────────────────────────────────────────────────
// Rutas de Parkiador (cliente)
Route::middleware(['auth','role:park'])->prefix('parkiador')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Parkiador\DashboardController::class, '__invoke'])->name('parkiador.dashboard');
    Route::get('/reservas',  [App\Http\Controllers\Parkiador\ReservationsController::class, 'history'])->name('parkiador.reservas');
    Route::get('/pagos',     [App\Http\Controllers\Parkiador\PaymentsController::class,    'methods'])->name('parkiador.pagos');
    Route::get('/perfil',    [App\Http\Controllers\Parkiador\ProfileController::class,     'edit'])->name('parkiador.perfil');
});

// ───────────────────────────────────────────────────────────
// Rutas de Parkioferente (ofertante)
// ───────────────────────────────────────────────────────────
Route::middleware(['auth','role:parki_oferente'])->prefix('parki-oferente')->group(function(){
    Route::get('/dashboard',     [App\Http\Controllers\Parkioferente\DashboardController::class,     '__invoke'])->name('ofertente.dashboard');
    Route::get('/parqueaderos',  [App\Http\Controllers\Parkioferente\ParkingSpotsController::class, 'index'])->name('ofertente.parqueaderos');
    Route::get('/reservas',      [App\Http\Controllers\Parkioferente\ReservationsController::class, 'index'])->name('ofertente.reservas');
    Route::get('/perfil',        [App\Http\Controllers\Parkioferente\ProfileController::class,      'edit'])->name('ofertente.perfil');
    Route::get('/legal',         [App\Http\Controllers\Parkioferente\LegalCenterController::class,   'index'])->name('ofertente.legal');
    Route::get('/legal/pqrs',    [App\Http\Controllers\Parkioferente\LegalCenterController::class,   'pqrsHistory'])->name('ofertente.legal.pqrs');
});

// — Auth Recuperación de contraseña —
Route::get('password/forgot', [App\Http\Controllers\Auth\ForgotPasswordController::class,'__invoke'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class,'sendLink'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class,'__invoke'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class,'reset'])->name('password.update');

// — Parkiador: Historial de reservas —
Route::resource('parkidor/history', App\Http\Controllers\Parkiador\ReservationHistoryController::class)->only(['index','show']);

// — Parkiador: Métodos de pago —
Route::resource('parkidor/payments', App\Http\Controllers\Parkiador\PaymentMethodsController::class);

// — Parkiador: Mis vehículos —
Route::resource('parkidor/vehicles', App\Http\Controllers\Parkiador\VehicleController::class);
