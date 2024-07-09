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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Azienda", 30);
            $table->string("Stazione di partenza", 30);
            $table->string("Stazione di arrivo", 30);
            $table->date("Orario di partenza");
            $table->date("Orario di arrivo");
            $table->integer("Codice Treno");
            $table->integer("Numero Carrozze");
            $table->boolean("In orario");
            $table->boolean("Cancellato");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
