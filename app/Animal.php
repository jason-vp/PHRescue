<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    const CHARACTER_TYPES = [
        "DOMINANT" => "Dominant",
        "FEARFUL" => "Fearful",
        "ENERGETIC" => "Energetic",
        "PEACEFUL" => "Peaceful"];

    const STATUSES = [
        "ADOPTED" => "Adopted",
        "DECEASED" => "Deceased",
        "RESERVERD" => "Reserved",
        "FOR_ADOPTION" => "Adoptable",
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birth_date', 'sex', 'weight', 'primary_color', 'secondary_color', 'ternary_color', 'entry_date',
        'microchip_number', 'microchip_date', 'passport_number', 'public_advertisement', 'found_observations',
        'character_type', 'character_observations', 'general_observations',
    ];

    public function foundAtCity() {
        return $this->belongsTo('App\City', 'found_at_city', 'id');
    }

    public function photos() {
        return $this->hasMany('App\AnimalPhoto');
    }


    public function favoritePhoto() {
        return $this->hasOne('App\AnimalPhoto');
    }

    public function animalable() {
        return $this->morphTo();
    }

    public function breed() {
        return $this->belongsTo('App\Breed');
    }
}
