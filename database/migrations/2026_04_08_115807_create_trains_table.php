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
            $table->string('Azienda', 50);
            $table->string('Stazione_partenza', 50);
            $table->string('Stazione_arrivo', 50);
            $table->dateTime('Orario_partenza');
            $table->dateTime('Orario_arrivo');
            $table->tinyInteger('Totale_carrozze');
            $table->tinyInteger('Ritardo');
            $table->boolean('Treno_soppresso')->default(false);
            $table->string('train_code', 15)->unique();
            $table->timestamps();
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
