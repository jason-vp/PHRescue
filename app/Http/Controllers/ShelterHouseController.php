<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class ShelterHouseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($id = null) {
        $title = "PHRescue - Acogidas";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $acogida = $id;

        return view('acogidas', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'acogida'));
    }
}
