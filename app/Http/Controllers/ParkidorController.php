<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkidorController extends Controller
{
    public function confirm(Request \$request)
    {
        // Recibimos place_id por query string
        \$placeId = \$request->query('place_id');
        return view('parkidor.confirm', compact('placeId'));
    }
}
