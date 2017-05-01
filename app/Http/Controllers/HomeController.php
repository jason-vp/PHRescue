<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JavaScript;

class HomeController extends Controller
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
    public function index()
    {
        $title = "PHRescue - Panel de usuario";
        $scripts = [];

        $current_tab = 'none';

        JavaScript::put([
            'user' => Auth::user()->load('person.entity')
        ]);

        return view('panel', compact('title', 'current_tab'));
    }
}
