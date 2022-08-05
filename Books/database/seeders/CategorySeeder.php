<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\CategoryBooks;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 1; $i <= 300; $i++) {
            CategoryBooks::create([
                'category' => $faker->text($maxNbChars = 10)
            ]);
        }
    }
}
