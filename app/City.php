<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function region() {
        return $this->belongsTo('App\Region');
    }

    public function animalsFoundHere() {
        return $this->hasMany('App\Animal');
    }
}
