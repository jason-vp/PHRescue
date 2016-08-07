<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class NonGrataController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index($type = null, $id = null)
    {
        $title = "PHRescue - Persona non Grata";

        $current_tab = 'adopciones';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $nonGrata = $id;

        return view('nonGratae', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'nonGrata', 'type'));
    }
}
