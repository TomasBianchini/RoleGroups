<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'created_at',
        "pivot"
    ];
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_usuario', 'usuario_id', 'grupo_id');
    }
}
