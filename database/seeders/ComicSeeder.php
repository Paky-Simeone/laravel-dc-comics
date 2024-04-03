<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use\App\Models\Comic;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_data = config('comics');

        foreach ($file_data as $data) {
            $comic = new Comic;
            $comic->fill($data);
            $comic->save();
        }
    }
}
