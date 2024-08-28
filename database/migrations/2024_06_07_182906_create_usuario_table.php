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
        Schema::create('usuario', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('hash', 255)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('senha', 255)->nullable();

            // $table->primary(['id_user', 'hash'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
