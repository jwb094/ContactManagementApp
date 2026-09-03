<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),

            'facebook' => $this->faker->optional()->userName(),
            'twitter' => $this->faker->optional()->userName(),
            'linkedin' => $this->faker->optional()->userName(),

            'address_line_1' => $this->faker->streetAddress(),
            'address_line_2' => $this->faker->optional()->secondaryAddress(),
            'town_city' => $this->faker->city(),
            'county' => $this->faker->state(),
            'post_code' => $this->faker->postcode(),

            'date_of_birth' => $this->faker->date(),
            'is_favourite' => $this->faker->boolean(),
            'notes' => $this->faker->optional()->sentence(),
            
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
