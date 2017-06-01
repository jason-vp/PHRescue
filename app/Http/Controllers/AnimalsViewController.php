<?php

namespace App\Http\Controllers;

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

    public function search($type = null) {

        $title = "PHRescue - Consulta ";

        $current_tab = "";

        if (isset($type)) {
            $current_tab = $type;
            $title .= $current_tab;
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

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);


        JavaScript::put([
            'type' => $type,
            'animals' => $this->getAllAnimals($type),
        ]);

        return view('search-animals', compact('title', 'current_tab', 'headerPaginador', 'paginador', 'perros', 'gatos', 'exoticos'));
    }

    public function edit($type, $id) {

        $animal = "Emiliano";
        $fotoAnimal = "/images/emiliano.jpg";
        $title= "PHRescue - Ficha " . $animal;

        $current_tab = "";

        if($type) {
            $current_tab = $type;
            $title.=$current_tab;
        }

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('ficha', compact('title', 'current_tab', 'animal', 'fotoAnimal', 'perros', 'gatos', 'exoticos'));
    }
}
