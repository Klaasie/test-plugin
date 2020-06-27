<?php namespace October\Test\Updates;

use Faker\Factory;
use October\Test\Models\Role;
use October\Rain\Database\Updates\Seeder;

class SeedRoles extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i <= 1500; $i++) {
            Role::create([
                'name' => $faker->company,
                'description' => $faker->sentence
            ]);
        }
    }
}
