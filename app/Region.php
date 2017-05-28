<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function country() {
        return $this->belongsTo('App\Country');
    }

    public function localities() {
        return $this->hasMany('App\Locality');
    }
}
