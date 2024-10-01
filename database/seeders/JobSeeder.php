<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departament;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $job1 = new Job();
        $job1->name = 'Gerente de Hernández Bienes Raíces';
        $job1->description = 'El gerente de Hernández Bienes Raíces es el encargado de dirigir y coordinar las operaciones de la empresa, supervisando el trabajo de los empleados, estableciendo metas y objetivos, y asegurando el cumplimiento de los estándares de calidad y servicio.';
        $job1->status = 1;
        $job1->departament_id = 1; // ID del departamento de Administración General
        $job1->save();

        $job2 = new Job();
        $job2->name = 'Director Comercial';
        $job2->description = 'El Director Comercial lidera las estrategias de ventas y marketing, supervisa al equipo de ventas, gestiona relaciones con clientes clave y analiza el mercado para identificar oportunidades de crecimiento.';
        $job2->status = 1;
        $job2->departament_id = 4; // ID del departamento de Ventas
        $job2->save();

        $job3 = new Job();
        $job3->name = 'Gerente Administrativo';
        $job3->description = 'El Gerente Administrativo supervisa las operaciones diarias de la empresa, gestiona recursos humanos, coordina tareas de soporte administrativo y controla el presupuesto y la administración financiera.';
        $job3->status = 1;
        $job3->departament_id = 3; // ID del departamento de Administración
        $job3->save();

        $job4 = new Job();
        $job4->name = 'Agente Inmobiliario';
        $job4->description = 'El Agente Inmobiliario actúa como intermediario entre compradores y vendedores de propiedades, muestra propiedades, asesora a los clientes, realiza evaluaciones y cierra acuerdos de venta o alquiler.';
        $job4->status = 1;
        $job4->departament_id = 4; // ID del departamento de Ventas
        $job4->save();

        $job5 = new Job();
        $job5->name = 'Corredor de Bienes Raíces';
        $job5->description = 'El Corredor de Bienes Raíces gestiona transacciones de propiedades, facilita la compra, venta o alquiler, realiza análisis de mercado y ofrece asesoramiento a los clientes sobre oportunidades inmobiliarias.';
        $job5->status = 1;
        $job5->departament_id = 4; // ID del departamento de Ventas
        $job5->save();

        $job6 = new Job();
        $job6->name = 'Especialista en Marketing Inmobiliario';
        $job6->description = 'El Especialista en Marketing Inmobiliario desarrolla estrategias de marketing para promocionar propiedades, crea contenido visual atractivo, gestiona campañas publicitarias y utiliza herramientas digitales para aumentar la visibilidad de las propiedades.';
        $job6->status = 1;
        $job6->departament_id = 6; // ID del departamento de Marketing
        $job6->save();

        $job7 = new Job();
        $job7->name = 'Asesor Hipotecario';
        $job7->description = 'El Asesor Hipotecario proporciona asesoramiento en el proceso de financiamiento para la compra de propiedades, analiza opciones de préstamos, ayuda en la solicitud de créditos y facilita la comunicación entre clientes y entidades financieras.';
        $job7->status = 1;
        $job7->departament_id = 4; // ID del departamento de Ventas
        $job7->save();

        $job8 = new Job();
        $job8->name = 'Inspector de Propiedades';
        $job8->description = 'El Inspector de Propiedades evalúa el estado físico y estructural de las propiedades, realiza inspecciones para detectar problemas, y asegura que las propiedades cumplan con las normativas vigentes.';
        $job8->status = 1;
        $job8->departament_id = 4; // ID del departamento de Ventas
        $job8->save();

        $job9 = new Job();
        $job9->name = 'Analista Inmobiliario';
        $job9->description = 'El Analista Inmobiliario evalúa inversiones, realiza estudios de mercado y proyecciones financieras, y asesora sobre decisiones estratégicas relacionadas con bienes raíces.';
        $job9->status = 1;
        $job9->departament_id = 4; // ID del departamento de Ventas
        $job9->save();

        $job10 = new Job();
        $job10->name = 'Abogado Inmobiliario';
        $job10->description = 'El Abogado Inmobiliario brinda asesoramiento legal en transacciones inmobiliarias, revisa y redacta contratos, resuelve disputas legales y asegura el cumplimiento de las regulaciones inmobiliarias.';
        $job10->status = 1;
        $job10->departament_id = 5; // ID del departamento de Legal
        $job10->save();

        $job11 = new Job();
        $job11->name = 'Contador';
        $job11->description = 'El Contador lleva los registros financieros, gestiona cuentas por pagar y cobrar, prepara estados financieros y asegura el cumplimiento de las normativas fiscales y contables de la empresa.';
        $job11->status = 1;
        $job11->departament_id = 8; // ID del departamento de Finanzas y Contabilidad
        $job11->save();

        $job12 = new Job();
        $job12->name = 'Especialista en Recursos Humanos';
        $job12->description = 'El Especialista en Recursos Humanos gestiona el reclutamiento, la selección, la capacitación, y la administración de beneficios del personal. Asegura el cumplimiento de las leyes laborales y mantiene un ambiente de trabajo positivo.';
        $job12->status = 1;
        $job12->departament_id = 2; // ID del departamento de Recursos Humanos
        $job12->save();

        // Jobs for the Personal Administrativo department
        $job13 = new Job();
        $job13->name = 'Secretaria';
        $job13->description = 'La Secretaria es responsable de la gestión de agendas, coordinación de citas, manejo de correspondencia y apoyo administrativo general. Actúa como el primer punto de contacto para clientes y proveedores.';
        $job13->status = 1;
        $job13->departament_id = 3; // Asumiendo que el ID del departamento de Personal Administrativo es 12
        $job13->save();

        $job14 = new Job();
        $job14->name = 'Recepcionista';
        $job14->description = 'El Recepcionista es el encargado de recibir y atender a los visitantes, responder llamadas telefónicas, gestionar correspondencia y realizar tareas administrativas básicas relacionadas con la recepción.';
        $job14->status = 1;
        $job14->departament_id = 3; // Asumiendo que el ID del departamento de Personal Administrativo es 12
        $job14->save();

        $job15 = new Job();
        $job15->name = 'Asistente Administrativo';
        $job15->description = 'El Asistente Administrativo brinda apoyo en tareas administrativas generales, organiza documentos, coordina reuniones y maneja la comunicación interna y externa de la empresa.';
        $job15->status = 1;
        $job15->departament_id = 3; // Asumiendo que el ID del departamento de Personal Administrativo es 12
        $job15->save();

        $job16 = new Job();
        $job16->name = 'Auxiliar Administrativo';
        $job16->description = 'El Auxiliar Administrativo apoya en la gestión diaria de la oficina, maneja archivos, procesa documentos y realiza tareas de apoyo administrativo bajo la supervisión del personal administrativo superior.';
        $job16->status = 1;
        $job16->departament_id = 3; // Asumiendo que el ID del departamento de Personal Administrativo es 12
        $job16->save();

        $job17 = new Job();
        $job17->name = 'Subgerente de Hernández Bienes Raíces';
        $job17->description = 'El Subgerente asiste al Gerente en la supervisión y coordinación de las operaciones diarias de la empresa. Su rol incluye la gestión de personal, apoyo en la toma de decisiones estratégicas y aseguramiento del cumplimiento de las políticas y procedimientos de la empresa. También actúa como el punto de contacto principal en ausencia del Gerente.';
        $job17->status = 1;
        $job17->departament_id = 9; // Asumiendo que el ID del departamento de Administración General es 9
        $job17->save();
    }
}
