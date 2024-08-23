<?php

namespace Database\Factories;

use App\Models\Departament;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->unique()->sentence(10);
        return [
            //
            "name" => $name,

            'description' => $this->faker->paragraph(20),
            'status' => $this->faker->randomElement([1]),
            'departament_id' => Departament::all()->random()->id

        ];
    }
}
