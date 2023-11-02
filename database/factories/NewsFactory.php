<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            "title" => $this->faker->text(50),
            "body" => $this->faker->paragraph(200),
            'user_id' => User::all()->random()->id,

            "status" => $this->faker->randomElement([0, 1])
        ];
    }
}
