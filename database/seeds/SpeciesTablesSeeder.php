<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeciesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!App\Species::where('name', 'Dog')->exists()) {
            App\Species::insert([
                ['name' => 'Dog'],
                ['name' => 'Cat'],
                ['name' => 'Bunnie'],
                ['name' => 'Hamster'],
                ['name' => 'Turtle'],
            ]);


            $dogs = App\Species::where('name', 'Dog')->first();
            $dogs->breeds()->saveMany([
                new App\Breed(['name' => 'Undefined']),
                new App\Breed(['name' => 'Mixed']),
                new App\Breed(['name' => 'Corgi']),
                new App\Breed(['name' => 'Husky']),
                new App\Breed(['name' => 'German Shepherd Dog']),
                new App\Breed(['name' => 'Chihuahua']),
            ]);

            $cats = App\Species::where('name', 'Cat')->first();
            $cats->breeds()->saveMany([
                new App\Breed(['name' => 'Undefined']),
                new App\Breed(['name' => 'Mixed']),
                new App\Breed(['name' => 'Siberian']),
                new App\Breed(['name' => 'Japanese Bobtail']),
                new App\Breed(['name' => 'Balinese']),
            ]);

            $bunnies = App\Species::where('name', 'Bunnie')->first();
            $bunnies->breeds()->saveMany([
                new App\Breed(['name' => 'Undefined']),
                new App\Breed(['name' => 'Mixed']),
            ]);

            $turtles = App\Species::where('name', 'Turtle')->first();
            $turtles->breeds()->saveMany([
                new App\Breed(['name' => 'Undefined']),
                new App\Breed(['name' => 'Mixed']),
            ]);

            $hamsters = App\Species::where('name', 'Hamster')->first();
            $hamsters->breeds()->saveMany([
                new App\Breed(['name' => 'Undefined']),
                new App\Breed(['name' => 'Mixed']),
                new App\Breed(['name' => 'Russian']),
            ]);
        }
    }
}
