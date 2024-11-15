<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attendance;
use App\Models\Attendances;

class AttendancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        /* $table->date("fecha");
        $table->time("entrada")->nullable();
        $table->time("salida")->nullable();

        $table->string("tipo_asistencia")->nullable();
        $table->string("minutos_diferencia")->nullable();

        $table->unsignedBigInteger("employee_id")->nullable();


        $table->foreign("employee_id")->references('id')->on('employees')->onDelete('set null')->onUpdate("cascade"); */

        // Ejemplo 1: Llegada puntual a las 8:00
        $attendance1 = new Attendances();
        $attendance1->fecha = "2024-11-02";
        $attendance1->entrada = "08:00:00";
        $attendance1->salida = "18:00:00";
        $attendance1->tipo_asistencia = "Puntual";
        $attendance1->minutos_diferencia = 0;
        $attendance1->employee_id = 2;
        $attendance1->save();

        // Ejemplo 2: Llegada temprana a las 7:50
        $attendance2 = new Attendances();
        $attendance2->fecha = "2024-11-03";
        $attendance2->entrada = "07:50:00";
        $attendance2->salida = "18:00:00";
        $attendance2->tipo_asistencia = "Temprano";
        $attendance2->minutos_diferencia = 10;
        $attendance2->employee_id = 2;
        $attendance2->save();

        // Ejemplo 3: Llegada tarde a las 8:10
        $attendance3 = new Attendances();
        $attendance3->fecha = "2024-11-04";
        $attendance3->entrada = "08:50:00";
        $attendance3->salida = "18:00:00";
        $attendance3->tipo_asistencia = "Tarde";
        $attendance3->minutos_diferencia = 10;
        $attendance3->employee_id = 2;
        $attendance3->save();

        // Ejemplo 4: Llegada temprana a las 7:30
        $attendance4 = new Attendances();
        $attendance4->fecha = "2024-11-05";
        $attendance4->entrada = "07:30:00";
        $attendance4->salida = "18:00:00";
        $attendance4->tipo_asistencia = "Temprano";
        $attendance4->minutos_diferencia = 30;
        $attendance4->employee_id = 2;
        $attendance4->save();

        // Ejemplo 5: Llegada tarde a las 8:20
        $attendance5 = new Attendances();
        $attendance5->fecha = "2024-11-06";
        $attendance5->entrada = "08:20:00";
        $attendance5->salida = "18:00:00";
        $attendance5->tipo_asistencia = "Puntual";
        $attendance5->minutos_diferencia = 20;
        $attendance5->employee_id = 2;
        $attendance5->save();

        // Ejemplo 1: Llegada puntual a las 8:00
        $attendance6 = new Attendances();
        $attendance6->fecha = "2024-11-07";
        $attendance6->entrada = "08:00:00";
        $attendance6->salida = "18:00:00";
        $attendance6->tipo_asistencia = "Puntual";
        $attendance6->minutos_diferencia = 0;
        $attendance6->employee_id = 3;
        $attendance6->save();

        // Ejemplo 2: Llegada temprana a las 7:45
        $attendance7 = new Attendances();
        $attendance7->fecha = "2024-11-08";
        $attendance7->entrada = "07:45:00";
        $attendance7->salida = "18:00:00";
        $attendance7->tipo_asistencia = "Temprano";
        $attendance7->minutos_diferencia = 15;
        $attendance7->employee_id = 3;
        $attendance7->save();

        // Ejemplo 3: Llegada tarde a las 8:05
        $attendance8 = new Attendances();
        $attendance8->fecha = "2024-11-09";
        $attendance8->entrada = "08:50:00";
        $attendance8->salida = "18:00:00";
        $attendance8->tipo_asistencia = "Tarde";
        $attendance8->minutos_diferencia = 5;
        $attendance8->employee_id = 3;
        $attendance8->save();

        // Ejemplo 4: Llegada temprana a las 7:55
        $attendance9 = new Attendances();
        $attendance9->fecha = "2024-11-10";
        $attendance9->entrada = "07:55:00";
        $attendance9->salida = "18:00:00";
        $attendance9->tipo_asistencia = "Temprano";
        $attendance9->minutos_diferencia = 5;
        $attendance9->employee_id = 3;
        $attendance9->save();

        // Ejemplo 5: Llegada tarde a las 8:15
        $attendance10 = new Attendances();
        $attendance10->fecha = "2024-11-11";
        $attendance10->entrada = "08:15:00";
        $attendance10->salida = "18:00:00";
        $attendance10->tipo_asistencia = "Puntual";
        $attendance10->minutos_diferencia = 15;
        $attendance10->employee_id = 3;
        $attendance10->save();
    }
}
