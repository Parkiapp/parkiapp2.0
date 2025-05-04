<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Validation\ValidationException;

class BookingController extends Controller
{
    public function store(Request \$request)
    {
        \$data = \$request->validate([
            'place_id'  => 'required|exists:places,id',
            'user_id'   => 'required|exists:users,id',
            'starts_at' => 'required|date|after_or_equal:now',
            'ends_at'   => 'required|date|after:starts_at',
            'price'     => 'required|numeric|min:0',
        ]);

        \$booking = Booking::create(\$data + ['status' => 'confirmed']);

        return response()->json([
            'message' => 'Reserva creada exitosamente.',
            'booking' => \$booking,
        ], 201);
    }
}
