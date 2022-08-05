<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Books;
use App\Models\Authors;
use App\Models\CategoryBooks;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors = Authors::all();
        $category = CategoryBooks::all();
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            for ($j = 0; $j < 100; $j++) {
                Books::create([
                    'id_author' => $authors[$j]->id,
                    'id_category' => $category[$j]->id,
                    'book' => $faker->text($maxNbChars = 10)
                ]);
            }
        }
    }
}
