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
        Schema::create('anuncio', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 255);
            $table->text('descricao');
            $table->decimal('preco', 10, 2);
            $table->date('data_publicacao'); 
            $table->unsignedBigInteger('id_proprietario');
            $table->unsignedBigInteger('id_veiculo');
            
            // Chaves estrangeiras
            $table->foreign('id_proprietario')
                ->references('id')->on('proprietario')
                ->onDelete('cascade');

            $table->foreign('id_veiculo')
                ->references('id')->on('veiculo')
                ->onDelete('cascade');

            // Um veículo só pode ter um anúncio
            $table->unique('id_veiculo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anuncio');
    }
};
