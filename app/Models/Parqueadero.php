<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoParqueadero::class, 'estado_id');
    }

    public function dimension()
    {
        return $this->belongsTo(Dimension::class, 'dimensione_id');
    }

    public function sistemaApertura()
    {
        return $this->belongsTo(SistemaApertura::class, 'sistema_apertura_id');
    }

    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class, 'caracteristica_id');
    }
}
