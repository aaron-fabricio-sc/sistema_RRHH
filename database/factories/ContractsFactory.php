<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contracts>
 */
class ContractsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type_contract = $this->faker->unique()->sentence();
        return [
            //
            "type_contract" => $type_contract,
            "slug" => Str::slug($type_contract),
            'description' => $this->faker->paragraph(100),
            'status' => $this->faker->randomElement([1, 0])
        ];
    }
}
