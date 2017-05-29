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

$factory->define(App\Animal::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'birth_date' => $faker->date('Y-m-d', 'now'),
        'sex' => $faker->randomElement(['Male', 'Female']),
        'weight' => $faker->optional(0.9)->randomFloat(2, 0, 25),
        'primary_color' => $faker->optional(0.9)->hexColor,
        'secondary_color' => $faker->optional(0.9)->hexColor,
        'ternary_color' => $faker->optional(0.9)->hexColor,
        'entry_date' => $faker->date('Y-m-d', 'now'),
        'microchip_number' => $faker->bothify('#################??'),
        'microchip_date' => $faker->date('Y-m-d', 'now'),
        'passport_number' => $faker->optional(0.2)->bothify('#################??'),
        'public_advertisement' => $faker->boolean(95),
        'found_at_city' => $faker->randomFloat(0, 1, 90),
        'found_observations' => $faker->realText(),
        'character_type' => $faker->optional(0.9)->randomElement(App\Animal::CHARACTER_TYPES),
        'character_observations' => $faker->optional(0.5)->realText(),
        'general_observations' => $faker->optional(0.7)->realText(),
        'status' => $faker->randomElement(App\Animal::STATUSES),
    ];
});

$factory->define(App\Dog::class, function (Faker\Generator $faker) {
    return [
        'height' => $faker->optional(0.5)->randomFloat(2,0, 120),
        'length' => $faker->optional(0.5)->randomFloat(2,0, 200),
    ];
});

$factory->define(App\Cat::class, function (Faker\Generator $faker) {
    return [
        'coat' => $faker->optional(0.8)->randomElement(App\Cat::COATS),
    ];
});

$factory->define(App\Exotic::class, function (Faker\Generator $faker) {
    return [
    ];
});
