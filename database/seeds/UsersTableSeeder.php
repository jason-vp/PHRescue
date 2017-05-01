<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Person::class, 5)->create()->each(function ($person) {
            $person->entity()->save(factory(App\Entity::class)->make());
            $person->user()->save(factory(App\User::class)->make());
        });
    }
}
