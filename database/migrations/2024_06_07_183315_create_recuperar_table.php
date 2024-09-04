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
            $table->id('id_recuperar');
            $table->string('email', 150)->nullable();
            $table->string('codigo', 150)->nullable();
            $table->dateTime('tempo_limite')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->string('user_hash', 255)->nullable();
            $table->timestamps();
        });

        Schema::table('recuperar', function (Blueprint $table) {
            $table->foreign(['id_user', 'user_hash'])->references(['id_user', 'hash'])->on('usuario');
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
