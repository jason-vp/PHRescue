<?php


namespace App\Traits;

use App\Animal;
use App\Breed;

trait AnimalController {

    public function getAllAnimals(String $type) {
         $ANIMALS_PER_PAGE = 12;

        switch ($type) {
            case "dogs":
                return Animal::with('animalable', 'favoritePhoto', 'breed.species')
                    ->where('animalable_type', 'App\Dog')->paginate($ANIMALS_PER_PAGE);
                break;
            case "cats":
                return Animal::with('animalable', 'favoritePhoto', 'breed.species')
                    ->where('animalable_type', 'App\Cat')->paginate($ANIMALS_PER_PAGE);
                break;
            case "exotics":
                return Animal::with('animalable', 'favoritePhoto', 'breed.species')
                    ->where('animalable_type', 'App\Exotic')->paginate($ANIMALS_PER_PAGE);
                break;
            default:
                abort(422);
        }
    }
}