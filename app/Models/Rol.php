<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_roles', 'rol_id', 'usuario_id');
    }
}
