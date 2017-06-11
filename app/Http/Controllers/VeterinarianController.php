<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class VeterinarianController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($id = null) {
        $title = "PHRescue - Veterinarios";

        $current_tab = 'veterinaria';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $veterinario = $id;

        return view('veterinarios', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'veterinario'));
    }
}
