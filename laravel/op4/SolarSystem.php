<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}
