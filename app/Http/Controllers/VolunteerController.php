<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class VolunteerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function searchIndex($type = null, $id = null) {
        $title = "PHRescue - Voluntarios";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $voluntario = $id;

        return view('voluntarios', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'voluntario', 'type'));
    }

    public function mailIndex() {
        $title = "PHRescue - Consulta correos";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();

        return view('correos', compact('title', 'current_tab', 'paginador', 'headerPaginador'));
    }
}
