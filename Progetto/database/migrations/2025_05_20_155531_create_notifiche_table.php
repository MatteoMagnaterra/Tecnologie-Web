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
        Schema::create('notifiche', function (Blueprint $table) {
            $table->increments('idNotifica');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('prenotazione_id')->nullable(); // opzionale: può riferirsi a una prenotazione
            $table->text('messaggio');
            $table->boolean('visualizzato')->default(false);
            $table->timestamps();

            // Foreign keys
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('prenotazione_id')->references('idPrenot')->on('prenotazioni')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifiche');
    }
};
