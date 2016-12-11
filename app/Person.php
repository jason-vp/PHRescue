<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'nif'
    ];

    public function user() {
        return $this->hasOne('App\User');
    }

    public function entity() {
        return $this->morphOne('App\Entity', 'entitable');
    }
}
