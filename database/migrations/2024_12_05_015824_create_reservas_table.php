<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('parqueadero_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->timestamp('fecha_reserva')->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->decimal('monto_total');
            $table->unsignedBigInteger('estado_reserva_id');
            $table->timestamps();
        
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parqueadero_id')->references('id')->on('parqueaderos')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('estado_reserva_id')->references('id')->on('estado_reservas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
