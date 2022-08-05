<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Rating;
use App\Models\Books;
use App\Models\Authors;

class RatingSeeder extends Seeder
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
        $book = Books::all();
        $author = Authors::all();
        for ($i = 0; $i < 500; $i++) {
            for ($j = 0; $j < 100; $j++) {
                Rating::create([
                    'id_book' => $book[$j]->id,
                    'id_author' => $author[$j]->id,
                    'rating' => $faker->numberBetween(1, 10),
                    'voter' => $faker->numberBetween(1, 10),
                    'average' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 10)
                ]);
            }
        }
    }
}
