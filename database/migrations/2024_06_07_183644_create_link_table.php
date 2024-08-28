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
        Schema::create('link', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('id_link');
            $table->varchar('path', 255)->nullable();
            $table->varchar('url', 255)->nullable();
            $table->dateTime('tempo_limite')->nullable();
            $table->string('user_hash', 255)->nullable();

            // $table->foreign('user_hash')->references('hash')->on('usuario');
            // $table->foreign('user_hash')->references('id_user')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link');
    }
};
