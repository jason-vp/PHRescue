<?php


namespace App\Traits;

use App\Animal;
use App\Species;

trait AnimalController {

    // Returns a page of all animals from the given type
    public function getPaginatedAnimals(String $type, $page = 1) {
         $ANIMALS_PER_PAGE = 12;

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
                abort(404);
        }
    }

    // Returns species and breeds for the given animal type
    public function getSpeciesForType(String $type) {
        switch ($type) {
            case "dogs":
                return Species::with('breeds')->where('name', 'Dog')->get();
                break;
            case "cats":
                return Species::with('breeds')->where('name', 'Cat')->get();
                break;
            case "exotics":
                return Species::with('breeds')->whereNotIn('name', ['Dog', 'Cat'])->get();
                break;
            default:
                abort(404);
        }
    }

    // TODO Find a more elegant solution
    public function checkAnimalType(String $type, Animal $animal) {
        $transformedType = "";
        switch ($type) {
            case "dogs":
                $transformedType = "App\Dog";
                break;
            case "cats":
                $transformedType = "App\Cat";
                break;
            case "exotics":
                $transformedType = "App\Exotic";
                break;
            default:
                abort(404);
        }

        if ($animal->animalable_type != $transformedType) {
            abort(404);
        }
    }
}