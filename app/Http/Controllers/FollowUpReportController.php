<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class FollowUpReportController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function edit($id = null, $management = null) {
        $title = "PHRescue - Seguimiento ";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $animal = $id;
        $gestor = $management;

        return view('seguimiento', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'animal', 'gestor'));
    }

    public function search($management = null) {
        $title = "PHRescue - Gestión Seguimientos";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $gestor = $management;

        return view('seguimientos', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'gestor'));
    }
}
