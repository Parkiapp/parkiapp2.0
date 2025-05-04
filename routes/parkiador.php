<?php
use AppHttpControllersParkiadorPaymentMethodsController;

use App\Http\Controllers\Parkiador\ReservationHistoryController;

// Historial de reservas Parkiador
Route::middleware('auth')->prefix('parkidor')->name('parkidor.')->group(function () {
    Route::get('reservas', [ReservationHistoryController::class,'index'])->name('reservas.history');
    Route::get('reservas/{id}', [ReservationHistoryController::class,'show'])->name('reservas.detail');
});
use Illuminate\Support\Facades\Route;

// Parkiador: recuperación de contraseña
Route::get('password/forgot', [App\Http\Controllers\Auth\ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class,'reset'])->name('password.update');

// Parkiador: historial de reservas
Route::get('reservas', [App\Http\Controllers\Parkiador\ReservationHistoryController::class,'index'])->name('parkidor.reservas');

// Parkiador: métodos de pago
Route::get('metodos-pago', [App\Http\Controllers\Parkiador\PaymentMethodController::class,'index'])->name('parkidor.metodos-pago');
Route::resource('parkidor/vehiculos', App\Http\Controllers\Parkiador\VehicleController::class);    // Vehículos (Parkiador)
    Route::resource('vehiculos', App\Http\Controllers\Parkiador\VehicleController::class)->names([
        'index'   => 'parkidor.vehiculos.index',
        'create'  => 'parkidor.vehiculos.create',
        'store'   => 'parkidor.vehiculos.store',
        'edit'    => 'parkidor.vehiculos.edit',
        'update'  => 'parkidor.vehiculos.update',
        'destroy' => 'parkidor.vehiculos.destroy',
    ]);\Route::post('metodos-pago', [App\Http\Controllers\Parkiador\PaymentMethodController::class,'store']);
Route::resource('parkidor/vehiculos', App\Http\Controllers\Parkiador\VehicleController::class);    // Vehículos (Parkiador)
    Route::resource('vehiculos', App\Http\Controllers\Parkiador\VehicleController::class)->names([
        'index'   => 'parkidor.vehiculos.index',
        'create'  => 'parkidor.vehiculos.create',
        'store'   => 'parkidor.vehiculos.store',
        'edit'    => 'parkidor.vehiculos.edit',
        'update'  => 'parkidor.vehiculos.update',
        'destroy' => 'parkidor.vehiculos.destroy',
    ]);\Route::put('metodos-pago/{id}/default', [App\Http\Controllers\Parkiador\PaymentMethodController::class,'setDefault']);
Route::resource('parkidor/vehiculos', App\Http\Controllers\Parkiador\VehicleController::class);    // Vehículos (Parkiador)
    Route::resource('vehiculos', App\Http\Controllers\Parkiador\VehicleController::class)->names([
        'index'   => 'parkidor.vehiculos.index',
        'create'  => 'parkidor.vehiculos.create',
        'store'   => 'parkidor.vehiculos.store',
        'edit'    => 'parkidor.vehiculos.edit',
        'update'  => 'parkidor.vehiculos.update',
        'destroy' => 'parkidor.vehiculos.destroy',
    ]);\Route::delete('metodos-pago/{id}', [App\Http\Controllers\Parkiador\PaymentMethodController::class,'destroy']);
Route::resource('parkidor/vehiculos', App\Http\Controllers\Parkiador\VehicleController::class);    // Vehículos (Parkiador)
    Route::resource('vehiculos', App\Http\Controllers\Parkiador\VehicleController::class)->names([
        'index'   => 'parkidor.vehiculos.index',
        'create'  => 'parkidor.vehiculos.create',
        'store'   => 'parkidor.vehiculos.store',
        'edit'    => 'parkidor.vehiculos.edit',
        'update'  => 'parkidor.vehiculos.update',
        'destroy' => 'parkidor.vehiculos.destroy',
    ]);\
// Parkiador: perfil y vehículos
Route::get('perfil', [App\Http\Controllers\Parkiador\ProfileController::class,'show'])->name('parkidor.perfil');
Route::put('perfil', [App\Http\Controllers\Parkiador\ProfileController::class,'update']);
Route::get('vehiculos', [App\Http\Controllers\Parkiador\VehicleController::class,'index'])->name('parkidor.vehiculos');
Route::post('vehiculos', [App\Http\Controllers\Parkiador\VehicleController::class,'store']);
Route::put('vehiculos/{id}', [App\Http\Controllers\Parkiador\VehicleController::class,'update']);
Route::delete('vehiculos/{id}', [App\Http\Controllers\Parkiador\VehicleController::class,'destroy']);
