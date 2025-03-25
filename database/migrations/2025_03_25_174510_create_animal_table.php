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
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 100);
            $table->string('especie', 100);
            $table->string('raca', 100);
            $table->int('idade');
            $table->string('sexo', 100);
            $table->string('porte', 100);
            $table->string('descricao', 200);
            $table->string('vacinacao', 100);
            $table->string('castrado', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
