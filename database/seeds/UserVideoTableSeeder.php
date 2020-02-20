<?php

use Illuminate\Database\Seeder;
use App\UVideo;
class UserVideoTableSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UVideo::truncate();
        
        UVideo::create([
            'video_id'=>"",
            'title'=>"Vợ lính việt nam cộng hòa trước 1975",
            'author'=>"clip xa hoi",
            'duration'=>"11:33"
        ]);
    }
}
