<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Entity
{
    protected $primaryKey = 'entity_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nif'
    ];
}
