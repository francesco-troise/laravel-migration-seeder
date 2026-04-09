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
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('Azienda','Company');
            $table->renameColumn('Stazione_partenza','Departure_station');
            $table->renameColumn('Stazione_arrivo','Arrival_station');
            $table->renameColumn('Orario_partenza','Departure_time');
            $table->renameColumn('Orario_arrivo','Arrival_time');
            $table->renameColumn('Totale_carrozze','Total_coaches');
            $table->renameColumn('Ritardo','Delay');
            $table->renameColumn('Treno_soppresso','Status');
            $table->renameColumn('train_code','Code');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            //Si omette il rollback, la tabella deve essere in inglese
        });
    }
};
