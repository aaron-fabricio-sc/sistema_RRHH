<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $contracts = new Contract();

        $contracts->type_contract = "Tiempo completo RRHH";
        $contracts->description = "Contrato de tiempo completo para el departamento de Recursos Humanos";
        $contracts->save();
    }
}
