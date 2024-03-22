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
        Schema::create('periodicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->string('nombre');
            $table->string('url');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->timestamps(); // Opcional: para registrar fechas de creación y actualización
        });
    }

    /**php 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodicos');
    }
};
