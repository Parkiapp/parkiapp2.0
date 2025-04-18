<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaApertura extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function parqueaderos()
    {
        return $this->hasMany(Parqueadero::class, 'sistema_apertura_id');
    }
}
