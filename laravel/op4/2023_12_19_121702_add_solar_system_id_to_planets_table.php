<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSolarSystemIdToPlanetsTable extends Migration
{
    public function up()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->foreignId('solar_system_id')->constrained('solar_systems');
        });
    }

    public function down()
    {
        Schema::table('planets', function (Blueprint $table) {
            $table->dropForeign(['solar_system_id']);
            $table->dropColumn('solar_system_id');
        });
    }
}
