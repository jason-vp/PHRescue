<?php


namespace App\Traits;

use App\Animal;

trait AnimalController {

    public function getPaginatedAnimals(String $type, $page = 1) {
         $ANIMALS_PER_PAGE = 3;

        switch ($type) {
            case "dogs":
                return Animal::with('animalable', 'favoritePhoto', 'breed.species')
                    ->where('animalable_type', 'App\Dog')
                    ->paginate($ANIMALS_PER_PAGE, null, null , $page);
                break;
            case "cats":
                return Animal::with('animalable', 'favoritePhoto', 'breed.species')
                    ->where('animalable_type', 'App\Cat')
                    ->paginate($ANIMALS_PER_PAGE, null, null , $page);
                break;
            case "exotics":
                return Animal::with('animalable', 'favoritePhoto', 'breed.species')
                    ->where('animalable_type', 'App\Exotic')
                    ->paginate($ANIMALS_PER_PAGE, null, null , $page);
                break;
            default:
                abort(422);
        }
    }
}