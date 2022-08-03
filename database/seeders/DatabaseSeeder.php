<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Client;
use \App\Models\Master;
use \App\Models\Service;
use \App\Models\Post;
use \App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Master::factory(10)->create();
        Client::factory(10)->create();

        $masters = Master::all();
        foreach ($masters as $master) {
            $master->services()->attach(Service::all()->random(2));
        }

        Post::factory(10)->create();
        Review::factory(10)->create();
    }
}