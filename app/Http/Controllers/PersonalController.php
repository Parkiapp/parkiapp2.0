<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonalController extends Controller
{
    /**
     * Muestra la lista de todos los registros de Personal.
     */
    public function index()
    {
        $personal = Personal::where('usuario_id', auth()->id())->first();

        // Retorna la vista con la variable $personal

        return view('personal.index', compact('personal'));
    }

    /**
     * Muestra el formulario para crear un nuevo registro.
     */
    public function create()
    {
        // Retorna la vista create para mostrar el formulario de creación
        return view('personal.create');
    }

    /**
     * Almacena un nuevo registro de Personal en la base de datos.
     */
    public function store(Request $request)
    {
    // Mezclamos el input del request con el usuario_id del usuario autenticado
    $datos = $request->all();
    $datos['usuario_id'] = auth()->id(); 
    $datos['identificacion'] = filter_var($datos['identificacion'], FILTER_SANITIZE_STRING);
    $datos['nombre'] = filter_var($datos['nombre'], FILTER_SANITIZE_STRING);
    $datos['apellido'] = filter_var($datos['apellido'], FILTER_SANITIZE_STRING);
    $datos['celular'] = filter_var($datos['celular'], FILTER_SANITIZE_STRING);
    $datos['direccion_casa'] = filter_var($datos['direccion_casa'], FILTER_SANITIZE_STRING);
    $datos['direccion_oficina'] = filter_var($datos['direccion_oficina'], FILTER_SANITIZE_STRING);

    $validator = Validator::make($datos, [
        'usuario_id' => 'required|integer|exists:users,id',
        'identificacion' => 'required|integer|min:3|max:4294967294|unique:personals,identificacion',
        'nombre' => 'required|string|min:3|max:255',
        'apellido' => 'required|string|min:3|max:255',
        'celular' => 'nullable|string|min:3|max:20',
        'direccion_casa' => 'nullable|string|min:3|max:255',
        'direccion_oficina' => 'nullable|string|min:3|max:255'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Crear el registro en la base de datos
    Personal::create($datos);

    return redirect()->route('personal.index')->with('success', 'Registro creado con éxito');
    }

    /**
     * Muestra un registro específico de Personal.
     */
    public function show(Personal $personal)
    {
        // Retorna la vista show con el registro específico
        return view('personal.show', compact('personal'));
    }

    /**
     * Muestra el formulario para editar un registro específico.
     */
    public function edit(Personal $personal)
    {
        // Retorna la vista edit con el registro a editar
        return view('personal.edit', compact('personal'));
    }

    /**
     * Actualiza un registro existente de Personal en la base de datos.
     */
    public function update(Request $request, Personal $personal)
    {
        // Validación de datos
        $datos = $request->all();
        $datos['usuario_id'] = auth()->id(); 
        $datos['identificacion'] = filter_var($datos['identificacion'], FILTER_SANITIZE_STRING);
        $datos['nombre'] = filter_var($datos['nombre'], FILTER_SANITIZE_STRING);
        $datos['apellido'] = filter_var($datos['apellido'], FILTER_SANITIZE_STRING);
        $datos['celular'] = filter_var($datos['celular'], FILTER_SANITIZE_STRING);
        $datos['direccion_casa'] = filter_var($datos['direccion_casa'], FILTER_SANITIZE_STRING);
        $datos['direccion_oficina'] = filter_var($datos['direccion_oficina'], FILTER_SANITIZE_STRING);

        $validator = Validator::make($datos, [
            'usuario_id' => 'sometimes|integer|exists:users,id',
            'identificacion' => 'sometimes|integer|min:3|max:4294967294|unique:personals,identificacion,'.$personal->id,
            'nombre' => 'sometimes|string|min:3|max:255',
            'apellido' => 'sometimes|string|min:3|max:255',
            'celular' => 'nullable|string|min:3|max:20',
            'direccion_casa' => 'nullable|string|min:3|max:255',
            'direccion_oficina' => 'nullable|string|min:3|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Actualización de campos dinámicos
        $personal->fill($request->only([
            'usuario_id',
            'identificacion',
            'nombre',
            'apellido',
            'celular',
            'direccion_casa',
            'direccion_oficina'
        ]));
        
        $personal->save();

        // Redirigir al index con mensaje de éxito
        return redirect()->route('personal.index')->with('success', 'Registro actualizado con éxito');
    }

    /**
     * Elimina un registro específico de Personal de la base de datos.
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
        // Redirigir al index con mensaje de éxito
        return redirect()->route('personal.index')->with('success', 'Registro eliminado con éxito');
    }
}