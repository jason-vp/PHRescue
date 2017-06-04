<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Cat;
use App\Dog;
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

        $title = "PHRescue - Alta ";

        $current_tab = "";

        // TODO: No type, throw 404
        if($type) {
            $current_tab = $type;
            $title.=$current_tab;
        }
        else {
            abort(404);
        }

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('altaRapida', compact('title', 'current_tab', 'perros', 'gatos', 'exoticos'));
    }

    public function search(Request $request, $type = null) {

        $title = "PHRescue - Consulta ";

        $current_tab = "";

        if (isset($type)) {
            $current_tab = $type;
            $title .= $current_tab;
            Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

            if ($type === "perros") {
                $type = "dogs";
            }
            else if ($type === "gatos") {
                $type = "cats";
            }
            else if ($type === "exoticos") {
                $type = "exotics";
            }
        }
        else {
            abort(404);
        }

        $page_number = $request->page >= 1 ? $request->page : null;

        $perros = false;
        $gatos = false;
        $exoticos = false;

        JavaScript::put([
            'type' => $type,
            'animals' => $this->getPaginatedAnimals($type, $page_number),
            'api_url' => '/api/animals',
        ]);

        return view('search-animals', compact('title', 'current_tab', 'perros', 'gatos', 'exoticos'));
    }

    public function edit($type, Animal $animal) {

        $fotoAnimal = "/images/emiliano.jpg";
        $title= "PHRescue - Ficha " . $animal->name;

        $current_tab = "";

        if (isset($type)) {
            $current_tab = $type;
            Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

            if ($type === "perros") {
                $type = "dogs";
            }
            else if ($type === "gatos") {
                $type = "cats";
            }
            else if ($type === "exoticos") {
                $type = "exotics";
            }
        }
        else {
            abort(404);
        }

        $this->checkAnimalType($type, $animal);

        $perros = false;
        $gatos = false;
        $exoticos = false;
        $species = $this->getSpeciesForType($type);

        JavaScript::put([
            'type' => $type,
            'animal' => $animal->load('breed.species', 'animalable'),
            'api_url' => '/api/animals',
            'species' => $species,
            'sizes' => Dog::SIZES,
            'coats' => Cat::COATS,
            'characters' => Animal::CHARACTER_TYPES
        ]);

        return view('ficha', compact('title', 'current_tab', 'animal', 'fotoAnimal', 'perros', 'gatos', 'exoticos'));
    }
}
