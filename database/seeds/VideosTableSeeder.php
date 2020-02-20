<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
        Video::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Video::create([
                'name' => $faker->word,
                'yvideo' => $faker->userName,
                'author' => $faker->userName,
            ]);
        }
    }
}
