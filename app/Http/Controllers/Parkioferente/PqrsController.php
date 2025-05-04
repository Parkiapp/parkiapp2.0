<?php

namespace App\Http\Controllers\Parkioferente;

use App\Http\Controllers\Controller;
use App\Models\PqrsCase;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PqrsCase $pqrsCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PqrsCase $pqrsCase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PqrsCase $pqrsCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PqrsCase $pqrsCase)
    {
        //
    }
}
public function index()
{
    \$cases = Pqrs::latest()->paginate(10);
    return view('oferente.pqrs.index', compact('cases'));
}

public function show(Pqrs \$pqr)
{
    return view('oferente.pqrs.show', compact('pqr'));
}

// create/store si permites que el oferente inicie casos, o comenta esos métodos

