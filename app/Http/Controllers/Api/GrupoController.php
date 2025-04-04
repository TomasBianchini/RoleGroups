<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $grupos = Grupo::all();
            return response()->json([
                'grupos' => $grupos,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error al obtener los grupos: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getPersonas(Request $request, string $id)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->load('usuarios');
        return response()->json([
            // 'usuarios' => $usuarios,
            'grupo' => $grupo,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function getPermisos(string $id)
    {
        $grupo = Grupo::findOrFail($id)->load('permisos');
        return response()->json([
            // 'permisos' => $grupo->permisos,
            'grupo' => $grupo,
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
