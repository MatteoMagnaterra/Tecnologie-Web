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
        Schema::create('utenti', function (Blueprint $table) {
            $table->id();
            $table->string('nome',25);
            $table->string('cognome');
            $table->enum('ruolo', ['admin', 'user', 'specialista']);
            $table->string('username',25)->unique();
            $table->string('password');
            $table->string('indirizzo')->nullable();
            $table->string('citta',25)->nullable();
            $table->date('data_di_nascita')->nullable();
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utenti');
    }
};
