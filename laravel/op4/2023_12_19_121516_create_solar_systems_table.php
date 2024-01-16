<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolarSystemsTable extends Migration
{
    public function up()
    {
        Schema::create('solar_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Voeg hier andere benodigde kolommen toe voor je zonnestelsels
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solar_systems');
    }
}
