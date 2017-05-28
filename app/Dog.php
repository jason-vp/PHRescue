<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'height', 'length',
    ];

    public function animal() {
        return $this->morphOne('App\Animal', 'animalable');
    }
}
