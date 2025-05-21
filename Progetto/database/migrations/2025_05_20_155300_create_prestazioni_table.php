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
        Schema::create('prestazioni', function (Blueprint $table) {
            $table->bigIncrements('idPrest');
            $table->string('nome', 100);
            $table->text('descrizione');
            $table->text('prescrizioni')->nullable();
            $table->set('giorni_settimana', ['Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì']);
            $table->set('slots', ['1', '2', '3', '4', '5', '6', '7', '8']);
            $table->unsignedBigInteger('dipartimento_id');
            $table->unsignedBigInteger('specialista_id');
            $table->timestamps();
            
            // Foreign keys
            $table->foreign('dipartimento_id')->references('idDip')->on('dipartimenti')->onDelete('cascade');
            $table->foreign('specialista_id')->references('idSpe')->on('specialisti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestazioni');
    }
};
