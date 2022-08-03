<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Topic;
use App\Models\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'topic_id' => Topic::factory()->create()->id,
            'image_id' => Image::factory()->create()->id,
            'title' => fake()->realText(25),
            'text' => fake()->realTextBetween(300, 1000)
        ];
    }
}