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
        $departament1 = new Departament();
        $departament1->name = 'Departamento de TI';
        $departament1->description = 'Departamento encargado de gestionar y mantener la infraestructura tecnológica de la empresa. Esto incluye la administración de servidores, redes, bases de datos, seguridad informática y soporte técnico a los empleados.';
        $departament1->status = 1;
        $departament1->save();

        $departament2 = new Departament();
        $departament2->name = 'Departamento de RRHH';
        $departament2->description = 'Departamento responsable de la gestión del talento humano en la empresa. Se encarga de procesos de contratación, capacitación, desarrollo profesional, nóminas, y el bienestar de los empleados, así como de la resolución de conflictos laborales.';
        $departament2->status = 1;
        $departament2->save();

        $departament3 = new Departament();
        $departament3->name = 'Departamento de Administración';
        $departament3->description = 'Departamento que se encarga de la gestión administrativa de la empresa, incluyendo la coordinación de recursos, la planificación de operaciones, la gestión de contratos y la supervisión de la correcta ejecución de procesos administrativos.';
        $departament3->status = 1;
        $departament3->save();

        $departament4 = new Departament();
        $departament4->name = 'Departamento de Ventas';
        $departament4->description = 'Departamento encargado de la comercialización de los bienes y servicios de la empresa. Su enfoque principal es el desarrollo de estrategias de ventas, la gestión de relaciones con los clientes y la optimización de las oportunidades de negocio para aumentar los ingresos.';
        $departament4->status = 1;
        $departament4->save();

        $departament5 = new Departament();
        $departament5->name = 'Departamento Legal';
        $departament5->description = 'Departamento que brinda asesoría jurídica a la empresa, gestionando contratos, litigios, y asegurando el cumplimiento de todas las normativas legales. Además, se encarga de la protección de los intereses de la empresa en materia legal.';
        $departament5->status = 1;
        $departament5->save();

        $departament6 = new Departament();
        $departament6->name = 'Departamento de Marketing';
        $departament6->description = 'Departamento encargado de la promoción y posicionamiento de la empresa en el mercado. Se centra en la creación de estrategias de marketing, publicidad, y relaciones públicas para atraer clientes y aumentar la visibilidad de la empresa.';
        $departament6->status = 1;
        $departament6->save();

        $departament7 = new Departament();
        $departament7->name = 'Departamento de Atención al Cliente';
        $departament7->description = 'Departamento que se ocupa de brindar soporte y asistencia a los clientes de la empresa. Es responsable de resolver dudas, manejar quejas y asegurar que la experiencia del cliente sea positiva, fortaleciendo la relación entre la empresa y sus clientes.';
        $departament7->status = 1;
        $departament7->save();

        $departament8 = new Departament();
        $departament8->name = 'Departamento de Finanzas y Contabilidad';
        $departament8->description = 'Departamento responsable de la gestión financiera de la empresa. Incluye la planificación financiera, la contabilidad, la auditoría, y la gestión de presupuestos, asegurando que las operaciones de la empresa sean económicamente viables y se mantengan en línea con los objetivos financieros.';
        $departament8->status = 1;
        $departament8->save();
        $departament9 = new Departament();
        $departament9->name = 'Administración General';
        $departament9->description = 'El Departamento de Administración General es responsable de la supervisión y gestión global de la empresa. Abarca la dirección estratégica, la coordinación entre departamentos, y asegura que todas las operaciones y procesos se alineen con los objetivos de la organización. Aquí se encuentran roles clave como el Gerente, quien supervisa las operaciones diarias, gestiona el personal, y se asegura de que las propiedades se mantengan en óptimas condiciones.';
        $departament9->status = 1;
        $departament9->save();
    }
}
