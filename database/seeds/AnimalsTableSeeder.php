<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dogBreeds = App\Species::where('name', 'Dog')->first()->breeds()->pluck('id')->all();
        $catBreeds = App\Species::where('name', 'Cat')->first()->breeds()->pluck('id')->all();
        $exoticBreeds = App\Species::whereNotIn('name', ['Dog', 'Cat'])->first()->breeds()->pluck('id')->all();

        factory(App\Dog::class, 22)->create()->each(function ($dog) use ($faker, $dogBreeds) {
            $animal = factory(App\Animal::class)->make(['breed_id' => $faker->randomElement($dogBreeds)]);
            $dog->animal()->save($animal);
            $photo = new \App\AnimalPhoto(array('path' => 'http://lorempixel.com/800/600/nature/'));
            $photo->animal()->associate($animal);
            $photo->save();
            $animal->favorite_photo = $photo->id;
            $animal->save();
        });

        factory(App\Cat::class, 20)->create()->each(function ($cat) use ($faker, $catBreeds) {
            $animal = factory(App\Animal::class)->make(['breed_id' => $faker->randomElement($catBreeds)]);
            $cat->animal()->save($animal);
            $photo = new \App\AnimalPhoto(array('path' => 'http://lorempixel.com/800/600/cats/'));
            $photo->animal()->associate($animal);
            $photo->save();
            $animal->favorite_photo = $photo->id;
            $animal->save();
        });

        factory(App\Exotic::class, 11)->create()->each(function ($exotic) use ($faker, $exoticBreeds) {
            $animal = factory(App\Animal::class)->make(['breed_id' => $faker->randomElement($exoticBreeds)]);
            $exotic->animal()->save($animal);
            $photo = new \App\AnimalPhoto(array('path' => 'http://lorempixel.com/800/600/animals/'));
            $photo->animal()->associate($animal);
            $photo->save();
            $animal->favorite_photo = $photo->id;
            $animal->save();
        });


    }
}
