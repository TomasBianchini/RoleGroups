<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupo';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];


    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'grupo_permiso', 'grupo_id', 'permiso_id');
    }
    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'grupo_usuario', 'grupo_id', 'usuario_id');
    }
}
