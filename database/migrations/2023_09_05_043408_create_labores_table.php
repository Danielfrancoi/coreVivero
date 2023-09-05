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
        Schema::create('labores', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('producto_control_id');
            $table->unsignedBigInteger('vivero_id');
            $table->dateTime('fecha');
            $table->string('descripcion', 100);
            $table->enum('tipo_labor', ['Control Hongo', 'Control Plaga', 'Control Fertilizante']);
            // $table->foreign('producto_control_id')->references('id')->on('productos_control');
            $table->foreign('vivero_id')->references('id')->on('viveros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labores');
    }
};
