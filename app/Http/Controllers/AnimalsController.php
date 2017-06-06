<?php

namespace App\Http\Controllers;

use App\Animal;
use App\AnimalPhoto;
use App\Breed;
use App\Cat;
use App\City;
use App\Dog;
use App\Exotic;
use App\Http\Requests\UpdateAnimal;
use App\Traits\AnimalController;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    use AnimalController;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request)
    {
        $type = $request->type;
        $page_number = $request->page >= 1 ? $request->page : null;

        return response($this->getPaginatedAnimals($type, $page_number), 200);
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
    public function update(UpdateAnimal $request, Animal $animal)
    {
        $animal->name = $request->name;

        if ($animal->animalable_type == 'App\Dog') {
            $animal->animalable->size = $request->input['animalable.size'];
            $animal->animalable->length = $request->input['animalable.length'];
            $animal->animalable->height = $request->input['animalable.height'];
        } else if ($animal->animalable_type == 'App\Dog') {
            $animal->animalable->coat = $request->input['animalable.coat'];
        }

        $animal->birth_date = $request->birth_date;

        try {
            $breed = Breed::findOrFail($request->input('breed.id'));
            $animal->breed()->associate($breed);
        }
        catch (ModelNotFoundException $e) {
            // TODO throw 404 with json
            dd($e);
        }

        $animal->character_observations = $request->character_observations;
        $animal->character_type = $request->character_type;
        $animal->entry_date = $request->entry_date;

        try {
            if ($request->input('found_at_city.id')) {
                $city = City::findOrFail($request->input('found_at_city.id'));
                $animal->foundAtCity()->associate($city);
            }
            else if ($animal->foundAtCity) {
                $animal->foundAtCity()->dissociate();
            }

        }
        catch (ModelNotFoundException $e) {
            // TODO Trhow 404 with json
            dd($e);
        }


        $animal->found_observations = $request->found_observations;
        $animal->microchip_date = $request->microchip_date;
        $animal->microchip_number = $request->microchip_number;
        $animal->passport_number = $request->passport_number;
        $animal->primary_color = $request->primary_color;
        $animal->secondary_color = $request->secondary_color;
        $animal->ternary_color = $request->ternary_color;
        $animal->public_advertisement = $request->public_advertisement;
        $animal->sex = $request->sex;
        $animal->weight = $request->weight;

        $animal->save();

        return response($animal->load('breed.species', 'animalable', 'foundAtCity.region.country', 'photos'), 200);
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

    public function updateFavoritePhoto(Animal $animal, AnimalPhoto $animalPhoto) {
        if ($animalPhoto->animal_id == $animal->id) {
            $animal->favorite_photo = $animalPhoto->id;
            $animal->save();
            return response($animal, 200);
        }
        abort(404);
    }
}
