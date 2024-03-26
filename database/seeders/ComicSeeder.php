<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use\App\Models\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i = 0; $i < 50; $i++) {
        $comic = new Comic;


        $comic->title = $faker->faketitle();
        $comic->description = $faker->fakedescription();
        $comic->thumb = $faker->imageUrl(640, 480, 'Paky', true);
        $comic->price = $faker->(0,0,
       }
    }
}
