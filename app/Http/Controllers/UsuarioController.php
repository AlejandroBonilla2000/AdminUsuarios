<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios -> nombre = $request -> nombre;
        $usuarios -> apellido = $request -> apellido;
        $usuarios -> correo = $request -> correo;
        $usuarios -> fecha_registro = $request -> fecha_registro;
        $usuarios -> save();
        return "guardado";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuarios = Usuario::find($id);
        $usuarios -> nombre = $request -> nombre;
        $usuarios -> apellido = $request -> apellido;
        $usuarios -> correo = $request -> correo;
        $usuarios -> fecha_registro = $request -> fecha_registro;
        $usuarios -> save();
        return "actualizado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuarios = Usuario::find($id);
        $usuarios ->delete();
        return "eliminado";
    }
}