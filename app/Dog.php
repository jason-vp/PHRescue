<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    const SIZES = [
        "SMALL" => "Small",
        "MEDIUM" => "Medium",
        "BIG" => "Big",
        "VERY_BIG" => "Very big",
    ];
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
