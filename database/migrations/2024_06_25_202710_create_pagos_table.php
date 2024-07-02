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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->double('total_pagado');
            $table->enum('forma_pago' , ['efectivo'] , ['tarjeta']); /* Pendiente de checar */
            $table->date('fecha_pago');
            $table->enum('estado' , ['Abonado'] , ['Pendiente'], ['Pendiente'] , ['Cancelado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
