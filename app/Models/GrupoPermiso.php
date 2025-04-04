<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoPermiso extends Model
{
    use HasFactory;

    protected $table = 'grupo_permiso';
    protected $fillable = [
        'grupo_id',
        'permiso_id'
    ];
}
