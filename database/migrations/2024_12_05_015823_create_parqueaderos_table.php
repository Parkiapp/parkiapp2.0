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
        Schema::create('parqueaderos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('nombre');
            $table->decimal('tarifa');
            $table->unsignedBigInteger('estado_id');
            $table->string('direccion_formateada')->nullable();
            $table->decimal('latitud', 10, 8)->nullable();
            $table->decimal('longitud', 11, 8)->nullable();
            $table->string('ciudad')->nullable();
            $table->string('departamento')->nullable();
            $table->string('pais')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('barrio')->nullable();
            $table->unsignedBigInteger('dimensiones_id');
            $table->unsignedBigInteger('sistema_apertura_id');
            $table->unsignedBigInteger('caracteristicas_id');
            $table->timestamps();
        
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estado_parqueaderos')->onDelete('cascade');
            $table->foreign('dimensiones_id')->references('id')->on('dimensions')->onDelete('cascade');
            $table->foreign('sistema_apertura_id')->references('id')->on('sistema_aperturas')->onDelete('cascade');
            $table->foreign('caracteristicas_id')->references('id')->on('caracteristicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parqueaderos');
    }
};
