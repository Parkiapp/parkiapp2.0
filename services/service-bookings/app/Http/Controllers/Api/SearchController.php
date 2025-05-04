<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request \$request)
    {
        \$lat = \$request->get('lat');
        \$lng = \$request->get('lng');
        // Distancia máxima en km
        \$maxKm = \$request->get('radius', 5);

        \$places = Place::selectRaw("
            *, ( 6371 * acos(
                cos(radians(?)) * cos(radians(latitude)) *
                cos(radians(longitude) - radians(?)) +
                sin(radians(?)) * sin(radians(latitude))
            )) AS distance", [\$lat, \$lng, \$lat])
            ->having('distance', '<=', \$maxKm)
            ->orderBy('distance')
            ->get();

        return response()->json(['data' => \$places]);
    }
}
