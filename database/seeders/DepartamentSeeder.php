<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departament;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->id();

        $departament1 = new Departament();

        $departament1->name = 'Departamento de TI';
        $departament1->description = 'Departamento de Tecnologia da Información';
        $departament1->status = 1;


        $departament1->save();

        $departament2 = new Departament();
        $departament2->name = 'Departamento de RH';
        $departament2->description = 'Departamento de Recursos Humanos';
        $departament2->status = 1;

        $departament2->save();

        $departament3 = new Departament();
        $departament3->name = 'Departamento de administración';
        $departament3->description = 'Departamento de administración';
        $departament3->status = 1;
        $departament3->save();

        $departament4 = new Departament();
        $departament4->name = 'Departamento de ventas';
        $departament4->description = 'Departamento de ventas';
        $departament4->status = 1;
        $departament4->save();
    }
}
