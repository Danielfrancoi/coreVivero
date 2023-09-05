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
        Schema::create('viveros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('finca_id');
            // $table->unsignedBigInteger('labor_id');
            $table->string('codigo', 100);
            $table->string('tipo_cultivo', 100);
            $table->foreign('finca_id')->references('id')->on('fincas');
            // $table->foreign('labor_id')->references('id')->on('labores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viveros');
    }
};
