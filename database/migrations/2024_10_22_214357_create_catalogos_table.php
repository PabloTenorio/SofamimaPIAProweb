s<?php

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
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_creador');
            $table->foreign('id_creador')->references('id')->on('users');
            $table->string('name');
            $table->string('color');
            $table->unsignedBigInteger('categoria');
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->string('material');
            $table->string('descripción');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
