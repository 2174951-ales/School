<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    public function solarSystem()
    {
        return $this->belongsTo(SolarSystem::class);
    }
}
