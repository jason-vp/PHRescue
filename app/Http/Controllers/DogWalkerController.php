<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Classes\Common;

class DogWalkerController extends Controller
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
    public function index($id = null)
    {
        $title = "PHRescue - Paseadores";

        $current_tab = 'voluntariado';

        $paginador = Common::paginador();
        $headerPaginador = Common::headerPaginador();
        $paseador = $id;

        return view('paseadores', compact('title', 'current_tab', 'paginador', 'headerPaginador', 'paseador'));
    }
}
