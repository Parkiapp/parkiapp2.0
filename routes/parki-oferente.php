<?php

use IlluminateSupportFacadesRoute;
<?php

use Illuminate\Support\Facades\Route;

// Parkioferente: dashboard y gestión
Route::get('/oferente/dashboard', [App\Http\Controllers\Parkioferente\DashboardController::class, '__invoke'])->name('oferente.dashboard');
Route::resource('/oferente/parqueaderos', App\Http\Controllers\Parkioferente\ParkingSpotsController::class);
Route::resource('/oferente/reservas',     App\Http\Controllers\Parkioferente\ReservationsController::class);

// Parkioferente: perfil y datos bancarios
Route::get('/oferente/perfil', [App\Http\Controllers\Parkioferente\ProfileController::class, '__invoke'])->name('oferente.perfil');

// Parkioferente: PQRS y soporte legal
Route::resource('/oferente/pqrs', App\Http\Controllers\Parkioferente\PqrsController::class);

