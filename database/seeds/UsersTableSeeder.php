<?php

use App\User;
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
        // Add admin user for testing
        if (!User::where('user_name','admin')->exists()) {
            $person = factory(App\Person::class, 1)->create();
            $person->entity()->save(factory(App\Entity::class)->make());
            $person->user()->save(
                factory(App\User::class)->make([
                    'user_name' => 'admin',
                    'password' => bcrypt('pass1234'),
                ])
            );

        }

        factory(App\Person::class, 5)->create()->each(function ($person) {
            $person->entity()->save(factory(App\Entity::class)->make());
            $person->user()->save(factory(App\User::class)->make());
        });
    }
}
