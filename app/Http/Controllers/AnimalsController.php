<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Cat;
use App\Dog;
use App\Exotic;
use App\Traits\AnimalController;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    use AnimalController;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request)
    {
        $type = $request->type;
        $page_number = $request->page >= 1 ? $request->page : null;

        switch ($type) {
            case "dogs":
                return response($this->getPaginatedAnimals($type, $page_number), 200);
                break;
            case "cats":
                return response($this->getPaginatedAnimals($type, $page_number), 200);
                break;
            case "exotics":
                return response($this->getPaginatedAnimals($type, $page_number), 200);
                break;
            default:
                abort(422);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}