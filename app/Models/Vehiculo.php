<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoVehiculo::class, 'tipo_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function linea()
    {
        return $this->belongsTo(Linea::class, 'linea_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
}
