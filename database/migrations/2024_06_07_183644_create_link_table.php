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
            $table->id('id_link')->autoIncrement()->primary();
            $table->varchar('path', 255);
            $table->varchar('url', 255);
            $table->dateTime('tempo_limite');
            $table->string('user_hash', 255);

            $table->foreign('user_hash')->references('hash')->on('usuario');
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
