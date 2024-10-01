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

        $contract1 = new Contract();
        $contract1->type_contract = 'Contrato Indefinido';
        $contract1->description = 'Contrato de duración indefinida con beneficios completos y estabilidad laboral.';
        $contract1->status = 1;
        $contract1->save();

        // Crear el segundo contrato
        $contract2 = new Contract();
        $contract2->type_contract = 'Contrato Temporal';
        $contract2->description = 'Contrato de duración determinada con una fecha de finalización específica, generalmente para cubrir necesidades temporales.';
        $contract2->status = 1;
        $contract2->save();

        // Crear el tercer contrato
        $contract3 = new Contract();
        $contract3->type_contract = 'Contrato a Tiempo Parcial';
        $contract3->description = 'Contrato para trabajos a tiempo parcial con menor cantidad de horas trabajadas a la semana, ideal para roles flexibles.';
        $contract3->status = 1;
        $contract3->save();

        // Crear el cuarto contrato
        $contract4 = new Contract();
        $contract4->type_contract = 'Contrato por Proyecto';
        $contract4->description = 'Contrato específico para la duración de un proyecto determinado, con condiciones basadas en la finalización del proyecto.';
        $contract4->status = 1;
        $contract4->save();

        // Crear el quinto contrato
        $contract5 = new Contract();
        $contract5->type_contract = 'Contrato de Prueba';
        $contract5->description = 'Contrato temporal para evaluar el desempeño del empleado durante un período de prueba antes de ofrecer un contrato a largo plazo.';
        $contract5->status = 1;
        $contract5->save();
    }
}
