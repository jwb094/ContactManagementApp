<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $tagNames = [
            //Personal Circles
            "Friends",
            "Family",
            "Immediate-Family",
            "Close-Friends",
            //Professional
            "Co-worker",
            "Mentor",
            "Ex-colleague",
            "Industry Peer",
            //Hobbies
            "Sports",
            "book-club",
            "Hiking-group",
            "Martial-Arts Group",
            "Football-team",
            //Local Services / Helpers
            "Plumber",
            "Therapist",
            "Doctor",
            "Electrician",
            "Mechanic",
            "Pet-Vet"

        ];
        $name = $this->faker->unique()->randomElement($tagNames);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
