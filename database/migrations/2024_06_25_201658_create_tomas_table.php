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
        Schema::create('tomas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('id_giro_comercial')->nullable()->constrained('giro_comercial_catalogos')->onDelete('set null');
            $table->foreignId('id_libro')->constrained('libros')->onDelete('cascade');
            $table->enum('estatus', ['pendiente confirmación inspección', 'pendiente de inspeccion', 'pendiente de instalacion', 'activa', 'baja definitiva', 'baja temporal', 'en proceso'])->default('pendiente confirmación inspección');
            $table->string('clave_catastral')->nullable();
            $table->string('calle')->nullable();
            $table->string('colonia')->nullable();
            $table->string('codigo_postal', 10)->nullable();
            $table->string('localidad')->nullable();
            $table->string('entre_calle_1')->nullable();
            $table->string('entre_calle_2')->nullable();
            $table->decimal('diametro_de_la_toma', 8, 2)->nullable();
            $table->string('calle_notificaciones')->nullable();
            $table->string('entre_calle_notificaciones_1')->nullable();
            $table->string('entre_calle_notificaciones_2')->nullable();
            $table->enum('tipo_servicio', ['lectura', 'promedio'])->nullable();
            $table->enum('tipo_toma', ['domestico', 'comercial', 'industrial', 'publico', 'especial'])->nullable();
            $table->string('coordenada')->nullable();
            $table->enum('tipo_contratacion', ['normal', 'condicionado', 'desarrollador','clandestina'])->default('normal');
            $table->enum('estado',['inactivo','activo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tomas');
    }
};
