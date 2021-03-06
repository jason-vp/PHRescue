<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function breeds() {
        return $this->hasMany('App\Breed');
    }
}
