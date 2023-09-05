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
        Schema::create('productos_control', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('labor_id');
            $table->string('registro_ica', 100);
            $table->string('nombre_producto', 100);
            $table->string('frecuencia_aplicacion', 100);
            $table->float('valor');
            $table->integer('periodo_carencia');
            $table->dateTime('fecha_ultima_aplicacion');
            $table->string('hongo', 100);
            $table->foreign('labor_id')->references('id')->on('labores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_control');
    }
};
