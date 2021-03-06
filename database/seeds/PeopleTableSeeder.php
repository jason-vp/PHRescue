<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
        });
    }
}
