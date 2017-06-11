<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    const COATS = [
        "BICOLOR" => "Bicolor",
        "TUXEDO" => "Tuxedo",
        "VAN" => "Van",
        "TABBY" => "Tabby",
        "TORTOISESHELL" => "Tortoiseshell",
        "CALICO" => "Calico",
        "COLORPOINT" => "Colorpoint",
        "ALBINO" => "ALBINO",
        "SMOKE" => "SMOKE",
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'coat',
    ];

    public function animal() {
        return $this->morphOne('App\Animal', 'animalable');
    }
}
