<?php

namespace App\Http\Controllers\Parkiador;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationHistoryFilterRequest;
use App\Models\Reserva;
use Illuminate\View\View;

class ReservationHistoryController extends Controller
{
    public function index(ReservationHistoryFilterRequest $request): View
    {
        $query = Reserva::where('user_id', auth()->id());
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('from')) {
            $query->whereDate('starts_at', '>=', $request->from);
        }
        if ($request->filled('to')) {
            $query->whereDate('ends_at', '<=', $request->to);
        }
        $reservas = $query->orderBy('starts_at','desc')->paginate(10);
        return view('parkidor.history.index', compact('reservas'));
    }
}
