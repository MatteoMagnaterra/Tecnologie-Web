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
        Schema::create('prenotazioni', function (Blueprint $table) {
            $table->bigIncrements('idPrenot');
            $table->unsignedBigInteger('utente_id');
            $table->unsignedBigInteger('prestazione_id');
            $table->enum('stato', ['richiesta', 'confermata', 'annullata', 'usufruita'])->default('richiesta');
            $table->tinyInteger('giorno_escluso')->nullable(); // 1 = lun, ..., 7 = dom
            $table->timestamps();

            // Foreign keys
            $table->foreign('utente_id')->references('id')->on('utenti')->onDelete('cascade');
            $table->foreign('prestazione_id')->references('idPrest')->on('prestazioni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prenotazioni');
    }
};
