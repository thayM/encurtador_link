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
        Schema::create('contato', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('id_contato');
            $table->string('email', 150)->nullable();
            $table->string('nome', 50)->nullable();
            $table->text('mensagem')->nullable();
            $table->integer('motivo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contato');
    }
};
