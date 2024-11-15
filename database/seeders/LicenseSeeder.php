<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\License;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $license1 = new License();
        $license1->type_license = 'Licencia de Maternidad';
        $license1->description = 'Licencia de maternidad de 12 semanas para todas las empleadas que hayan trabajado al menos 6 meses en la empresa.';
        $license1->save();

        $license2 = new License();
        $license2->type_license = 'Licencia de Paternidad';
        $license2->description = 'Licencia de paternidad de 2 semanas para todos los empleados que hayan trabajado al menos 6 meses en la empresa.';
        $license2->save();

        $license3 = new License();
        $license3->type_license = 'Licencia por Enfermedad';
        $license3->description = 'Licencia por enfermedad de hasta 10 días al año para todos los empleados.';
        $license3->save();

        $license4 = new License();
        $license4->type_license = 'Licencia por Duelo';
        $license4->description = 'Licencia por duelo de hasta 5 días al año para todos los empleados.';
        $license4->save();

        $license5 = new License();
        $license5->type_license = 'Licencia por Vacaciones';
        $license5->description = 'Licencia por vacaciones de acuerdo al tiempo de servicio de cada empleado.';
        $license5->save();

        $license6 = new License();
        $license6->type_license = 'Licencia por un día';
        $license6->description = 'Licencia por un día para asuntos personales.';
        $license6->save();
    }
}
