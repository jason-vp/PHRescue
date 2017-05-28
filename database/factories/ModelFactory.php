<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\Entity::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'non_grata' => $faker->boolean(0),
        'non_grata_reason' => ''
    ];
});

$factory->define(App\Person::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\es_ES\Person($faker));

    return [
        'nif' => $faker->unique()->dni
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'user_name' => $faker->unique()->userName,
        'password' => bcrypt('pass1234'),
        'remember_token' => str_random(10)
    ];
});

//$factory->define(App\)
