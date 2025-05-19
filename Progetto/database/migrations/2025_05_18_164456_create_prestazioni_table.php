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
            $table->string('giorni', 50); // es: "Lun,Mar,Ven"
            $table->time('orario_inizio'); // es: "08:00"
            $table->unsignedBigInteger('dipartimento_id');
            $table->timestamps();
            
            // Foreign keys
            $table->foreign('dipartimento_id')->references('idDip')->on('dipartimenti')->onDelete('cascade');
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
