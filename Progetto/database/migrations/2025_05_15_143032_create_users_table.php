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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('cognome',100);
            $table->enum('ruolo', ['admin', 'user', 'staff']);
            $table->string('username',50);
            $table->string('password');
            $table->string('indirizzo',255)->nullable();
            $table->string('citta',100)->nullable();
            $table->date('data_di_nascita')->nullable();
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
