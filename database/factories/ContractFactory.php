<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulosContratos = [
            'Contrato de Servicios Profesionales',
            'Contrato de Arrendamiento',
            'Contrato de Trabajo a Tiempo Indeterminado',
            'Contrato de Obra Determinada',
            'Contrato de Prestación de Servicios',
            // Agrega más títulos según sea necesario
            "Contrato de Obra",
            "Contrato de Comodato",
            "Contrato de Compraventa",
            "Contrato de Mutuo",
            "Contrato de Depósito",
        ];
        $type_contract = $this->faker->unique()->randomElement($titulosContratos);
        return [
            //
            "type_contract" => $type_contract,

            'description' => $this->faker->paragraph(20),
            'status' => $this->faker->randomElement([1])
        ];
    }
}
