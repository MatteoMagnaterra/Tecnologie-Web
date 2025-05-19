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
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('idAgenda');
            $table->unsignedBigInteger('idPrenotazione');   // collegamento alla prestazione
            $table->date('giorno_prenotazione');                            // giorno dell'appuntamento
            $table->tinyInteger('slot_orario');                     // 1 = 08–09, 2 = 09–10, ecc.
            $table->unsignedBigInteger('utente_id')->nullable(); // se null, slot libero
            $table->timestamps();

            // Foreign keys
            $table->foreign('idprenotazione')->references('idPrenot')->on('prenotazioni')->onDelete('cascade');
            $table->foreign('utente_id')->references('id')->on('utenti')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
