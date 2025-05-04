<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    public function run(): void
    {
        \$samples = [
            ['name'=>'Centro Parqueadero','address'=>'Calle 123, Bogotá','price'=>3.50,'latitude'=>4.6486,'longitude'=>-74.0859],
            ['name'=>'Mall Parking','address'=>'Av. Suba 45','price'=>4.00,'latitude'=>4.7045,'longitude'=>-74.0687],
            ['name'=>'Estadio Lot','address'=>'Cra. 50 #30-09','price'=>2.75,'latitude'=>4.6488,'longitude'=>-74.1016],
        ];
        foreach (\$samples as \$s) {
            Place::create(\$s);
        }
    }
}
