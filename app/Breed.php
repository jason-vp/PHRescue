<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function species() {
        return $this->belongsTo('App\Species');
    }

    public function animals() {
        return $this->hasMany('App\Animal');
    }
}
