<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request \$request)
    {
        return response()->json([
            'data' => Booking::with('place','user')
                ->orderBy('starts_at','desc')
                ->get()
        ]);
    }
}
