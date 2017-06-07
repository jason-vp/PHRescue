<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Cat;
use App\City;
use App\Country;
use App\Dog;
use App\Region;
use App\Traits\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;
use JavaScript;

class AnimalsViewController extends Controller
{
    use AnimalController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($type = null) {

        if (!in_array($type, ['dogs', 'cats', 'exotics'])) {
            abort(404);
        }

        $title = "PHRescue - Alta ";

        $current_tab = $type;
        $title .= $current_tab;

        $species = $this->getSpeciesForType($type);

        JavaScript::put([
            'type' => $type,
            'api_url' => '/api/animals',
            'species' => $species,
            'sizes' => Dog::SIZES,
            'coats' => Cat::COATS,
            'characters' => Animal::CHARACTER_TYPES,
            'countries' => Country::with('regions.cities')->get(),
        ]);

        return view('altaRapida', compact('title', 'current_tab'));
    }

    public function search(Request $request, $type = null) {

        $title = "PHRescue - Consulta ";

        $current_tab = $type;

        $page_number = $request->page >= 1 ? $request->page : null;

        JavaScript::put([
            'type' => $type,
            'animals' => $this->getPaginatedAnimals($type, $page_number),
            'api_url' => '/api/animals',
        ]);

        return view('search-animals', compact('title', 'current_tab'));
    }

    public function edit($type, Animal $animal) {
        $title= "PHRescue - Ficha " . $animal->name;

        $this->checkAnimalType($type, $animal);

        $current_tab = $type;

        $species = $this->getSpeciesForType($type);

        JavaScript::put([
            'type' => $type,
            'animal' => $animal->load('breed.species', 'animalable', 'foundAtCity.region.country', 'photos'),
            'api_url' => '/api/animals',
            'species' => $species,
            'sizes' => Dog::SIZES,
            'coats' => Cat::COATS,
            'characters' => Animal::CHARACTER_TYPES,
            'countries' => Country::with('regions.cities')->get(),
        ]);

        return view('ficha', compact('title', 'current_tab'));
    }
}
