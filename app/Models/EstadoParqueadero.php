<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoParqueadero extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function parqueaderos()
    {
        return $this->hasMany(Parqueadero::class, 'estado_id');
    }
}
