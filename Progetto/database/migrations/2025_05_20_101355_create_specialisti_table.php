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
        Schema::create('specialisti', function (Blueprint $table) {
            $table->BigIncrements('idSpe');
            $table->string('nome', 100);
            $table->string('cognome', 100);
            $table->unsignedBigInteger('dipartimento_id');
            $table->timestamps();
            
            // Foreign key
            $table->foreign('dipartimento_id')->references('idDip')->on('dipartimenti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialisti');
    }
};
