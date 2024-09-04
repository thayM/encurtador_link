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
            $table->id('id_link');
            $table->string('path', 255);
            $table->string('url', 255);
            $table->dateTime('tempo_limite');
            $table->unsignedBigInteger('id_user');
            $table->string('user_hash', 255);
            $table->timestamps();
        });

        Schema::table('link', function (Blueprint $table) {
            $table->foreign(['id_user', 'user_hash'])->references(['id_user', 'hash'])->on('usuario');
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

