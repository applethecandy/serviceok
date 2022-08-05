<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Client;
use \App\Models\Master;
use \App\Models\Service;
use \App\Models\Post;
use \App\Models\Review;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Schlüsseldienst',      'Schädlingsbekämpfung',         'Elektriker Notdienst',
            'Sanitär Notdienst',    'Rohrreinigung',                'Möbeltischler',
            'Reinigungsdienste',    'Möbelaufbau und Reparatur',    'Transportdienst',
            'Umzugsservice',        'Kleinreparaturen',             'Gipserarbeiten',
            'Fliesenarbeiten',      'Maurerdienste',                'Malerarbeiten',
            'Wespenbekämpfung',     'Nagetierbekämpfung',           'Montage von Gipskartonplatten',
        ];

        foreach ($services as $service) {
            Client::factory()
                ->for(Work::factory()
                    ->for(Service::create(['title' => $service]))
                    ->create())
                ->create();
        }

        for ($i = 0; $i < 10; $i++) {
            Master::factory()->hasAttached(Service::all()->random(3))->create();
        }

        Post::factory(10)->create();
        Review::factory(10)->create();
    }
}