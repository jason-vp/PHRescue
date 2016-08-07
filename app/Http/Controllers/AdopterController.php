<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class AdopterController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($type = null, $id = null) {
        $title = "PHRescue - Adoptantes";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $adoptante = $id;

        return view('adoptantes', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'adoptante', 'type'));
    }
}
