<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exotic extends Model
{

    public function animal() {
        return $this->morphOne('App\Animal', 'animalable');
    }
}
