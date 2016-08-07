<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class AnimalController extends Controller
{
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

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('altaRapida', compact('title', 'current_tab', 'perros', 'gatos', 'exoticos'));
    }

    public function search($type = null) {

        $title = "PHRescue - Consulta ";

        $current_tab = "";

        if($type) {
            $current_tab = $type;
            $title.=$current_tab;
        }

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();

        $perros = false;
        $gatos = false;
        $exoticos = false;

        Common::checkTipo($current_tab, $perros, $gatos, $exoticos);

        return view('consulta', compact('title', 'current_tab', 'headerPaginador', 'paginador', 'perros', 'gatos', 'exoticos'));
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