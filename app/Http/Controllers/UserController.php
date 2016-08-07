<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($id = null) {
        $title = "PHRescue - Usuarios";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $usuario = $id;

        return view('usuarios', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'usuario'));
    }
}
