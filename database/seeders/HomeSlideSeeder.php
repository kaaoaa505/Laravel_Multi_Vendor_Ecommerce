<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomeSlide;

class HomeSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSlide::insert([
            'title' => 'Home Slide 1',
            'short_title' => 'HS 1',
            'home_slide' => 'http://127.0.0.1:8000/upload/home_slide/1798376934984060.png',
            'video_url' => '',
        ]);
    }
}
