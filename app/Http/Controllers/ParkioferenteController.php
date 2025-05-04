<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ParkioferenteController extends Controller
{
    public function dashboard()
    {
        return view('oferente.dashboard');
    }
}
