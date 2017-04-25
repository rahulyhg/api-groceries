<?php

use App\User;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
          User::create([
            "name" => $faker->firstName,
            "email" => $faker->email,
            "password" => bcrypt('secret')
          ]);
        }
    }
}
