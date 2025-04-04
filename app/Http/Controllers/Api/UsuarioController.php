<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getGrupos(Request $request, string $id)
    {
        $user = Usuario::findOrFail($id);
        $grupos = $user->grupos()->get();
        $user = $user->load('grupos');
        return response()->json([
            'grupos' => $grupos,
            'user' => $user,
        ]);
    }

    public function getPermisos(string $id)
    {
        $user = Usuario::findOrFail($id)->load('grupos.permisos');
        // $user->load('grupos.permisos');
        $user->grupos->each->makeHidden(['pivot']);
        return response()->json([
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
