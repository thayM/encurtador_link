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
        Schema::create('recuperar', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('id_recuperar');
            $table->string('email', 150)->nullable();
            $table->string('codigo', 150)->nullable();
            $table->dateTime('tempo_limite')->nullable();
            $table->string('user_hash', 255)->nullable();

            $table->foreign('user_hash')->references(['hash', 'id_user'])->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recuperar');
    }
};
