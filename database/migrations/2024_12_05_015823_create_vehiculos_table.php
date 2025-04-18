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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('tipo_id');
            $table->string('placa')->unique();
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('linea_id');
            $table->year('modelo');
            $table->unsignedBigInteger('color_id');
            $table->timestamps();
        
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipo_vehiculos')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('linea_id')->references('id')->on('lineas')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
