<?php

namespace App\Http\Controllers\Parkiador;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VehicleController extends Controller
{
    public function index(): View
    {
        \$vehicles = Vehicle::where('user_id', auth()->id())->get();
        return view('parkiador.vehiculos.index', compact('vehicles'));
    }

    public function create(): View
    {
        return view('parkiador.vehiculos.create');
    }

    public function store(StoreVehicleRequest \$request): RedirectResponse
    {
        auth()->user()->vehicles()->create(\$request->validated());
        return redirect()->route('parkidor.vehiculos.index')->with('success', 'Vehículo agregado');
    }

    public function edit(Vehicle \$vehicle): View
    {
        \$this->authorize('update', \$vehicle);
        return view('parkiador.vehiculos.edit', compact('vehicle'));
    }

    public function update(UpdateVehicleRequest \$request, Vehicle \$vehicle): RedirectResponse
    {
        \$this->authorize('update', \$vehicle);
        \$vehicle->update(\$request->validated());
        return back()->with('success', 'Vehículo actualizado');
    }

    public function destroy(Vehicle \$vehicle): RedirectResponse
    {
        \$this->authorize('delete', \$vehicle);
        \$vehicle->delete();
        return back()->with('success', 'Vehículo eliminado');
    }
}
