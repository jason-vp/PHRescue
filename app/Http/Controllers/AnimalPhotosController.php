<?php

namespace App\Http\Controllers;

use App\Animal;
use App\AnimalPhoto;
use Illuminate\Http\Request;

class AnimalPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function destroy(Animal $animal, AnimalPhoto $animalPhoto)
    {
        $animal->load('photos');
        $remainingPhoto = $animal->photos()->where('id', '!=', $animalPhoto->id)->first();
        if ($animal->favorite_photo == $animalPhoto->id) {
            if ($remainingPhoto) {
                $animal->favorite_photo = $remainingPhoto->id;
            }
            else {
                $animal->favorite_photo = null;
            }
            $animal->save();
        }
        $animalPhoto->delete();

        return response($animal, 200);
    }
}
