<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\CiExtension;
use App\Models\Contract;
use App\Models\Job;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $employee1 = new Employee();
        $employee1->name = 'Jose';
        $employee1->firts_last_name = 'Luis';
        $employee1->second_last_name = 'Hernández';
        $employee1->image = null;
        $employee1->cv = null;
        $employee1->birthdate = '1985-06-15';
        $employee1->gender = 'Masculino';
        $employee1->phone = '555-1234';
        $employee1->email = 'ana.lopez@example.com';
        $employee1->type_document = 'Documento Nacional';
        $employee1->document_number = '12345678';
        $employee1->document_complement = null;
        $employee1->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee1->address_1 = 'Avenida Arce 1234, Edificio Mirador, Oficina 567';
        $employee1->address_2 = null;
        $employee1->previous_work_details = 'Trabajó en XYZ Corp.';
        $employee1->start_date = "2005-01-01";
        $employee1->final_date = null;
        $employee1->additional_employee_details = '';
        $employee1->working_time = null;
        $employee1->days_vacations = null;
        $employee1->vacation_start_date = null;
        $employee1->vacation_final_date = null;
        $employee1->take_vacation = 0;
        $employee1->contract_id = Contract::first()->inRandomOrder()->first()->id;; // Ajusta según datos reales
        $employee1->job_id = Job::where('name', 'Gerente de Hernández Bienes Raices')->first()->id; // Ajusta según datos reales
        $employee1->user_id = null; // Ajusta según datos reales
        $employee1->status = 1;
        $employee1->save();



        $employee2 = new Employee();
        $employee2->name = 'Rolando';
        $employee2->firts_last_name = 'Clavijo';
        $employee2->second_last_name = 'Torrez';
        $employee2->image = null;
        $employee2->cv = null;
        $employee2->birthdate = '1989-10-27';
        $employee2->gender = 'Masculino';
        $employee2->phone = '7891323';
        $employee2->email = null;
        $employee2->type_document = 'Documento Nacional';
        $employee2->document_number = '11111';
        $employee2->document_complement = null;
        $employee2->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee2->address_1 = 'Avenida Arce 1234, Edificio Mirador, Oficina 567';
        $employee2->address_2 = null;
        $employee2->previous_work_details = 'Trabajó en XYZ Corp.';
        $employee2->start_date = "2005-01-01";
        $employee2->final_date = null;
        $employee2->additional_employee_details = null;
        $employee2->working_time = null;
        $employee2->days_vacations = null;
        $employee2->vacation_start_date = null;
        $employee2->vacation_final_date = null;
        $employee2->take_vacation = 0;
        $employee2->contract_id = Contract::first()->inRandomOrder()->first()->id;; // Ajusta según datos reales
        $employee2->job_id = Job::where('name', 'Subgerente de Hernández Bienes Raíces')->first()->id; // Ajusta según datos reales
        $employee2->user_id = null; // Ajusta según datos reales
        $employee2->status = 1;
        $employee2->save();

        $employee3 = new Employee();
        $employee3->name = 'María';
        $employee3->firts_last_name = 'Pérez';
        $employee3->second_last_name = 'Gómez';
        $employee3->image = null;
        $employee3->cv = null;
        $employee3->birthdate = '1987-03-15';
        $employee3->gender = 'Femenino';
        $employee3->phone = '7896543';
        $employee3->email = 'maria.perez@example.com';
        $employee3->type_document = 'Documento Nacional';
        $employee3->document_number = '22222';
        $employee3->document_complement = null;
        $employee3->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee3->address_1 = 'Calle 21 de Calacoto, Edificio Los Pinos, Departamento 302';
        $employee3->address_2 = null;
        $employee3->previous_work_details = 'Trabajó en ABC Corp. como Gerente de Ventas.';
        $employee3->start_date = '2012-08-15';
        $employee3->final_date = null;
        $employee3->additional_employee_details = 'Especialista en estrategias comerciales y marketing.';
        $employee3->working_time = 'Full-time';
        $employee3->days_vacations = 20;
        $employee3->vacation_start_date = null;
        $employee3->vacation_final_date = null;
        $employee3->take_vacation = 0;
        $employee3->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee3->job_id = Job::where('name', 'Director Comercial')->first()->id; // ID del trabajo de Director Comercial
        $employee3->user_id = null; // Ajusta según datos reales
        $employee3->status = 1;
        $employee3->save();

        $employee4 = new Employee();
        $employee4->name = 'Jorge';
        $employee4->firts_last_name = 'Ramírez';
        $employee4->second_last_name = 'Sánchez';
        $employee4->image = null;
        $employee4->cv = null;
        $employee4->birthdate = '1980-11-22';
        $employee4->gender = 'Masculino';
        $employee4->phone = '77654321';
        $employee4->email = 'jorge.ramirez@example.com';
        $employee4->type_document = 'Documento Nacional';
        $employee4->document_number = '33333';
        $employee4->document_complement = null;
        $employee4->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee4->address_1 = 'Avenida Camacho 456, Edificio Empresarial, Oficina 101';
        $employee4->address_2 = null;
        $employee4->previous_work_details = 'Trabajó en DEF Corp. como Jefe de Administración.';
        $employee4->start_date = '2010-03-01';
        $employee4->final_date = null;
        $employee4->additional_employee_details = 'Experto en gestión administrativa y financiera.';
        $employee4->working_time = 'Full-time';
        $employee4->days_vacations = 20;
        $employee4->vacation_start_date = null;
        $employee4->vacation_final_date = null;
        $employee4->take_vacation = 0;
        $employee4->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee4->job_id = Job::where('name', 'Gerente Administrativo')->first()->id; // ID del trabajo de Gerente Administrativo
        $employee4->user_id = null; // Ajusta según datos reales
        $employee4->status = 1;
        $employee4->save();

        /* ///////Corredor de Bienes Raíces///////// */

        $employee5 = new Employee();
        $employee5->name = 'María';
        $employee5->firts_last_name = 'Fernández';
        $employee5->second_last_name = 'Pérez';
        $employee5->image = null;
        $employee5->cv = null;
        $employee5->birthdate = '1992-07-15';
        $employee5->gender = 'Femenino';
        $employee5->phone = '76543210';
        $employee5->email = 'maria.fernandez@example.com';
        $employee5->type_document = 'Documento Nacional';
        $employee5->document_number = '44444';
        $employee5->document_complement = null;
        $employee5->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee5->address_1 = 'Calle Sagárnaga 234, La Paz';
        $employee5->address_2 = null;
        $employee5->previous_work_details = 'Trabajó en ABC Inmobiliaria.';
        $employee5->start_date = '2015-06-01';
        $employee5->final_date = null;
        $employee5->additional_employee_details = 'Experiencia en ventas de inmuebles residenciales.';
        $employee5->working_time = 'Full-time';
        $employee5->days_vacations = 15;
        $employee5->vacation_start_date = null;
        $employee5->vacation_final_date = null;
        $employee5->take_vacation = 0;
        $employee5->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee5->job_id = Job::where('name', 'Corredor de Bienes Raíces')->first()->id; // ID del trabajo de Corredor de Bienes Raíces
        $employee5->user_id = null; // Ajusta según datos reales
        $employee5->status = 1;
        $employee5->save();

        $employee6 = new Employee();
        $employee6->name = 'Carlos';
        $employee6->firts_last_name = 'Gutiérrez';
        $employee6->second_last_name = 'Rojas';
        $employee6->image = null;
        $employee6->cv = null;
        $employee6->birthdate = '1987-04-20';
        $employee6->gender = 'Masculino';
        $employee6->phone = '76567890';
        $employee6->email = null;
        $employee6->type_document = 'Documento Nacional';
        $employee6->document_number = '55555';
        $employee6->document_complement = null;
        $employee6->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee6->address_1 = 'Avenida Illimani 456, La Paz';
        $employee6->address_2 = null;
        $employee6->previous_work_details = 'Trabajó en Inmobiliaria XYZ.';
        $employee6->start_date = '2018-09-15';
        $employee6->final_date = null;
        $employee6->additional_employee_details = 'Especialista en ventas comerciales.';
        $employee6->working_time = 'Full-time';
        $employee6->days_vacations = 18;
        $employee6->vacation_start_date = null;
        $employee6->vacation_final_date = null;
        $employee6->take_vacation = 0;
        $employee6->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee6->job_id = Job::where('name', 'Corredor de Bienes Raíces')->first()->id; // ID del trabajo de Corredor de Bienes Raíces
        $employee6->user_id = null; // Ajusta según datos reales
        $employee6->status = 1;
        $employee6->save();

        $employee7 = new Employee();
        $employee7->name = 'Laura';
        $employee7->firts_last_name = 'Mendoza';
        $employee7->second_last_name = 'Santos';
        $employee7->image = null;
        $employee7->cv = null;
        $employee7->birthdate = '1995-11-30';
        $employee7->gender = 'Femenino';
        $employee7->phone = '76789012';
        $employee7->email = 'laura.mendoza@example.com';
        $employee7->type_document = 'Documento Nacional';
        $employee7->document_number = '66666';
        $employee7->document_complement = null;
        $employee7->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee7->address_1 = 'Calle 21 de Calacoto 789, La Paz';
        $employee7->address_2 = null;
        $employee7->previous_work_details = 'Trabajó en Agencia de Bienes Raíces DEF.';
        $employee7->start_date = '2020-01-20';
        $employee7->final_date = null;
        $employee7->additional_employee_details = 'Experta en negociación y cierre de ventas.';
        $employee7->working_time = 'Full-time';
        $employee7->days_vacations = 12;
        $employee7->vacation_start_date = null;
        $employee7->vacation_final_date = null;
        $employee7->take_vacation = 0;
        $employee7->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee7->job_id = Job::where('name', 'Corredor de Bienes Raíces')->first()->id; // ID del trabajo de Corredor de Bienes Raíces
        $employee7->user_id = null; // Ajusta según datos reales
        $employee7->status = 1;
        $employee7->save();


        /* MARKETING */

        $employee8 = new Employee();
        $employee8->name = 'Sofía';
        $employee8->firts_last_name = 'Martínez';
        $employee8->second_last_name = 'Gómez';
        $employee8->image = null;
        $employee8->cv = null;
        $employee8->birthdate = '1990-03-22';
        $employee8->gender = 'Femenino';
        $employee8->phone = '76543123';
        $employee8->email = 'sofia.martinez@example.com';
        $employee8->type_document = 'Documento Nacional';
        $employee8->document_number = '77777';
        $employee8->document_complement = null;
        $employee8->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee8->address_1 = 'Calle Loayza 456, Edificio Aurora, Oficina 301, La Paz';
        $employee8->address_2 = null;
        $employee8->previous_work_details = 'Trabajó en Agencia de Marketing XYZ.';
        $employee8->start_date = '2017-08-10';
        $employee8->final_date = null;
        $employee8->additional_employee_details = 'Experta en campañas digitales y marketing de contenidos.';
        $employee8->working_time = 'Full-time';
        $employee8->days_vacations = 20;
        $employee8->vacation_start_date = null;
        $employee8->vacation_final_date = null;
        $employee8->take_vacation = 0;
        $employee8->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee8->job_id = Job::where('name', 'Especialista en Marketing Inmobiliario')->first()->id; // ID del trabajo de Especialista en Marketing Inmobiliario
        $employee8->user_id = null; // Ajusta según datos reales
        $employee8->status = 1;
        $employee8->save();

        $employee9 = new Employee();
        $employee9->name = 'Andrés';
        $employee9->firts_last_name = 'Vargas';
        $employee9->second_last_name = 'Ríos';
        $employee9->image = null;
        $employee9->cv = null;
        $employee9->birthdate = '1985-11-14';
        $employee9->gender = 'Masculino';
        $employee9->phone = '78945612';
        $employee9->email = 'andres.vargas@example.com';
        $employee9->type_document = 'Documento Nacional';
        $employee9->document_number = '88888';
        $employee9->document_complement = null;
        $employee9->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee9->address_1 = 'Avenida Ballivián 678, La Paz';
        $employee9->address_2 = null;
        $employee9->previous_work_details = 'Trabajó en Inmobiliaria ABC como responsable de marketing.';
        $employee9->start_date = '2019-04-25';
        $employee9->final_date = null;
        $employee9->additional_employee_details = 'Especialista en SEO y estrategias de redes sociales.';
        $employee9->working_time = 'Full-time';
        $employee9->days_vacations = 18;
        $employee9->vacation_start_date = null;
        $employee9->vacation_final_date = null;
        $employee9->take_vacation = 0;
        $employee9->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee9->job_id = Job::where('name', 'Especialista en Marketing Inmobiliario')->first()->id; // ID del trabajo de Especialista en Marketing Inmobiliario
        $employee9->user_id = null; // Ajusta según datos reales
        $employee9->status = 1;
        $employee9->save();


        /* asesor hipotecario */

        $employee10 = new Employee();
        $employee10->name = 'Laura';
        $employee10->firts_last_name = 'Pérez';
        $employee10->second_last_name = 'Quispe';
        $employee10->image = null;
        $employee10->cv = null;
        $employee10->birthdate = '1992-07-08';
        $employee10->gender = 'Femenino';
        $employee10->phone = '76451234';
        $employee10->email = 'laura.perez@example.com';
        $employee10->type_document = 'Documento Nacional';
        $employee10->document_number = '99999';
        $employee10->document_complement = null;
        $employee10->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee10->address_1 = 'Calle 21 de Calacoto, La Paz';
        $employee10->address_2 = null;
        $employee10->previous_work_details = 'Trabajó en Banco XYZ como asesora financiera.';
        $employee10->start_date = '2016-05-12';
        $employee10->final_date = null;
        $employee10->additional_employee_details = 'Especialista en préstamos hipotecarios y asesoramiento financiero.';
        $employee10->working_time = 'Full-time';
        $employee10->days_vacations = 22;
        $employee10->vacation_start_date = null;
        $employee10->vacation_final_date = null;
        $employee10->take_vacation = 0;
        $employee10->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee10->job_id = Job::where('name', 'Asesor Hipotecario')->first()->id; // ID del trabajo de Asesor Hipotecario
        $employee10->user_id = null; // Ajusta según datos reales
        $employee10->status = 1;
        $employee10->save();

        $employee11 = new Employee();
        $employee11->name = 'Carlos';
        $employee11->firts_last_name = 'Gutiérrez';
        $employee11->second_last_name = 'Mamani';
        $employee11->image = null;
        $employee11->cv = null;
        $employee11->birthdate = '1988-12-19';
        $employee11->gender = 'Masculino';
        $employee11->phone = '76543219';
        $employee11->email = 'carlos.gutierrez@example.com';
        $employee11->type_document = 'Documento Nacional';
        $employee11->document_number = '100001';
        $employee11->document_complement = null;
        $employee11->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee11->address_1 = 'Avenida Hernando Siles 123, La Paz';
        $employee11->address_2 = null;
        $employee11->previous_work_details = 'Trabajó en Financiera ABC como asesor de créditos.';
        $employee11->start_date = '2018-09-03';
        $employee11->final_date = null;
        $employee11->additional_employee_details = 'Experto en evaluación de riesgos y procesos hipotecarios.';
        $employee11->working_time = 'Full-time';
        $employee11->days_vacations = 20;
        $employee11->vacation_start_date = null;
        $employee11->vacation_final_date = null;
        $employee11->take_vacation = 0;
        $employee11->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee11->job_id = Job::where('name', 'Asesor Hipotecario')->first()->id; // ID del trabajo de Asesor Hipotecario
        $employee11->user_id = null; // Ajusta según datos reales
        $employee11->status = 1;
        $employee11->save();


        /* Inspector de Propiedades */
        $employee12 = new Employee();
        $employee12->name = 'Valeria';
        $employee12->firts_last_name = 'Rodríguez';
        $employee12->second_last_name = 'Fernández';
        $employee12->image = null;
        $employee12->cv = null;
        $employee12->birthdate = '1990-03-22';
        $employee12->gender = 'Femenino';
        $employee12->phone = '78965412';
        $employee12->email = 'valeria.rodriguez@example.com';
        $employee12->type_document = 'Documento Nacional';
        $employee12->document_number = '54321098';
        $employee12->document_complement = null;
        $employee12->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee12->address_1 = 'Calle 16 de Obrajes, La Paz';
        $employee12->address_2 = null;
        $employee12->previous_work_details = 'Trabajó como inspectora de propiedades en Inmobiliaria XYZ.';
        $employee12->start_date = '2017-11-14';
        $employee12->final_date = null;
        $employee12->additional_employee_details = 'Especialista en evaluación estructural y cumplimiento de normativas.';
        $employee12->working_time = 'Full-time';
        $employee12->days_vacations = 25;
        $employee12->vacation_start_date = null;
        $employee12->vacation_final_date = null;
        $employee12->take_vacation = 0;
        $employee12->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee12->job_id = Job::where('name', 'Inspector de Propiedades')->first()->id; // ID del trabajo de Inspector de Propiedades
        $employee12->user_id = null; // Ajusta según datos reales
        $employee12->status = 1;
        $employee12->save();

        /* Analista Inmobiliario */
        $employee13 = new Employee();
        $employee13->name = 'Carlos';
        $employee13->firts_last_name = 'Gómez';
        $employee13->second_last_name = 'Pérez';
        $employee13->image = null;
        $employee13->cv = null;
        $employee13->birthdate = '1982-07-10';
        $employee13->gender = 'Masculino';
        $employee13->phone = '75423689';
        $employee13->email = 'carlos.gomez@example.com';
        $employee13->type_document = 'Documento Nacional';
        $employee13->document_number = '78965412';
        $employee13->document_complement = null;
        $employee13->ci_extension_id = CiExtension::inRandomOrder()->first()->id; // ID aleatorio de CiExtension
        $employee13->address_1 = 'Calle 21 de Calacoto, Edificio Torre Azul, Piso 3, La Paz';
        $employee13->address_2 = null;
        $employee13->previous_work_details = 'Analista financiero en Banco Nacional.';
        $employee13->start_date = '2012-05-20';
        $employee13->final_date = null;
        $employee13->additional_employee_details = 'Experto en análisis de inversiones inmobiliarias y estudios de mercado.';
        $employee13->working_time = 'Full-time';
        $employee13->days_vacations = 20;
        $employee13->vacation_start_date = null;
        $employee13->vacation_final_date = null;
        $employee13->take_vacation = 0;
        $employee13->contract_id = Contract::inRandomOrder()->first()->id; // Ajusta según datos reales
        $employee13->job_id = Job::where('name', 'Analista Inmobiliario')->first()->id; // ID del trabajo de Analista Inmobiliario
        $employee13->user_id = null; // Ajusta según datos reales
        $employee13->status = 1;
        $employee13->save();

        /* Abogado Inmobiliario */
        $employee14 = new Employee();
        $employee14->name = 'Lina';
        $employee14->firts_last_name = 'Mendoza';
        $employee14->second_last_name = 'Ramirez';
        $employee14->image = null;
        $employee14->cv = null;
        $employee14->birthdate = '1987-03-05';
        $employee14->gender = 'Femenino';
        $employee14->phone = '71122334';
        $employee14->email = 'lina.mendoza@example.com';
        $employee14->type_document = 'Documento Nacional';
        $employee14->document_number = '55667788';
        $employee14->document_complement = null;
        $employee14->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee14->address_1 = 'Avenida del Libertador 4567, La Paz, Bolivia';
        $employee14->address_2 = null;
        $employee14->previous_work_details = 'Experiencia en derechos inmobiliarios en LegalConsult.';
        $employee14->start_date = '2016-02-15';
        $employee14->final_date = null;
        $employee14->additional_employee_details = null;
        $employee14->working_time = null;
        $employee14->days_vacations = null;
        $employee14->vacation_start_date = null;
        $employee14->vacation_final_date = null;
        $employee14->take_vacation = 0;
        $employee14->contract_id = Contract::inRandomOrder()->first()->id;
        $employee14->job_id = Job::where('name', 'Abogado Inmobiliario')->first()->id;
        $employee14->user_id = null;
        $employee14->status = 1;
        $employee14->save();

        $employee15 = new Employee();
        $employee15->name = 'Javier';
        $employee15->firts_last_name = 'Alvarado';
        $employee15->second_last_name = 'Pérez';
        $employee15->image = null;
        $employee15->cv = null;
        $employee15->birthdate = '1982-11-20';
        $employee15->gender = 'Masculino';
        $employee15->phone = '72233445';
        $employee15->email = 'javier.alvarado@example.com';
        $employee15->type_document = 'Documento Nacional';
        $employee15->document_number = '33445566';
        $employee15->document_complement = null;
        $employee15->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee15->address_1 = 'Calle 21 de Julio 345, La Paz, Bolivia';
        $employee15->address_2 = null;
        $employee15->previous_work_details = 'Asesoramiento legal en el bufete García & Asociados.';
        $employee15->start_date = '2014-07-01';
        $employee15->final_date = null;
        $employee15->additional_employee_details = null;
        $employee15->working_time = null;
        $employee15->days_vacations = null;
        $employee15->vacation_start_date = null;
        $employee15->vacation_final_date = null;
        $employee15->take_vacation = 0;
        $employee15->contract_id = Contract::inRandomOrder()->first()->id;
        $employee15->job_id = Job::where('name', 'Abogado Inmobiliario')->first()->id;
        $employee15->user_id = null;
        $employee15->status = 1;
        $employee15->save();

        /* Contador */
        $employee16 = new Employee();
        $employee16->name = 'Fernando';
        $employee16->firts_last_name = 'Sánchez';
        $employee16->second_last_name = 'Cruz';
        $employee16->image = null;
        $employee16->cv = null;
        $employee16->birthdate = '1984-09-12';
        $employee16->gender = 'Masculino';
        $employee16->phone = '73344556';
        $employee16->email = 'fernando.sanchez@example.com';
        $employee16->type_document = 'Documento Nacional';
        $employee16->document_number = '78901234';
        $employee16->document_complement = null;
        $employee16->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee16->address_1 = 'Avenida Villalobos 789, La Paz, Bolivia';
        $employee16->address_2 = null;
        $employee16->previous_work_details = 'Contador en Contabilidad Global S.A.';
        $employee16->start_date = '2015-03-01';
        $employee16->final_date = null;
        $employee16->additional_employee_details = null;
        $employee16->working_time = null;
        $employee16->days_vacations = null;
        $employee16->vacation_start_date = null;
        $employee16->vacation_final_date = null;
        $employee16->take_vacation = 0;
        $employee16->contract_id = Contract::inRandomOrder()->first()->id;
        $employee16->job_id = Job::where('name', 'Contador')->first()->id;
        $employee16->user_id = null;
        $employee16->status = 1;
        $employee16->save();

        $employee17 = new Employee();
        $employee17->name = 'Paola';
        $employee17->firts_last_name = 'Gutiérrez';
        $employee17->second_last_name = 'Morales';
        $employee17->image = null;
        $employee17->cv = null;
        $employee17->birthdate = '1990-04-22';
        $employee17->gender = 'Femenino';
        $employee17->phone = '74455667';
        $employee17->email = 'paola.gutierrez@example.com';
        $employee17->type_document = 'Documento Nacional';
        $employee17->document_number = '22334455';
        $employee17->document_complement = null;
        $employee17->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee17->address_1 = 'Calle Camacho 654, La Paz, Bolivia';
        $employee17->address_2 = null;
        $employee17->previous_work_details = 'Contadora en FinanzaPro.';
        $employee17->start_date = '2018-06-15';
        $employee17->final_date = null;
        $employee17->additional_employee_details = null;
        $employee17->working_time = null;
        $employee17->days_vacations = null;
        $employee17->vacation_start_date = null;
        $employee17->vacation_final_date = null;
        $employee17->take_vacation = 0;
        $employee17->contract_id = Contract::inRandomOrder()->first()->id;
        $employee17->job_id = Job::where('name', 'Contador')->first()->id;
        $employee17->user_id = null;
        $employee17->status = 1;
        $employee17->save();

        $employee18 = new Employee();
        $employee18->name = 'Oscar';
        $employee18->firts_last_name = 'Vargas';
        $employee18->second_last_name = 'Moreno';
        $employee18->image = null;
        $employee18->cv = null;
        $employee18->birthdate = '1981-08-09';
        $employee18->gender = 'Masculino';
        $employee18->phone = '75566788';
        $employee18->email = 'oscar.vargas@example.com';
        $employee18->type_document = 'Documento Nacional';
        $employee18->document_number = '33445566';
        $employee18->document_complement = null;
        $employee18->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee18->address_1 = 'Calle Ballivián 321, La Paz, Bolivia';
        $employee18->address_2 = null;
        $employee18->previous_work_details = 'Contador en Contadores & Asociados.';
        $employee18->start_date = '2012-10-20';
        $employee18->final_date = null;
        $employee18->additional_employee_details = null;
        $employee18->working_time = null;
        $employee18->days_vacations = null;
        $employee18->vacation_start_date = null;
        $employee18->vacation_final_date = null;
        $employee18->take_vacation = 0;
        $employee18->contract_id = Contract::inRandomOrder()->first()->id;
        $employee18->job_id = Job::where('name', 'Contador')->first()->id;
        $employee18->user_id = null;
        $employee18->status = 1;
        $employee18->save();

        /* Especialista en Recursos Humanos */
        $employee19 = new Employee();
        $employee19->name = 'Sofía';
        $employee19->firts_last_name = 'Ramírez';
        $employee19->second_last_name = 'Paredes';
        $employee19->image = null;
        $employee19->cv = null;
        $employee19->birthdate = '1987-11-05';
        $employee19->gender = 'Femenino';
        $employee19->phone = '73312233';
        $employee19->email = null;
        $employee19->type_document = 'Documento Nacional';
        $employee19->document_number = '45678901';
        $employee19->document_complement = null;
        $employee19->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee19->address_1 = 'Avenida 6 de Agosto 123, La Paz, Bolivia';
        $employee19->address_2 = null;
        $employee19->previous_work_details = 'Especialista en Recursos Humanos en Human Capital S.A.';
        $employee19->start_date = '2019-02-01';
        $employee19->final_date = null;
        $employee19->additional_employee_details = null;
        $employee19->working_time = null;
        $employee19->days_vacations = null;
        $employee19->vacation_start_date = null;
        $employee19->vacation_final_date = null;
        $employee19->take_vacation = 0;
        $employee19->contract_id = Contract::inRandomOrder()->first()->id;
        $employee19->job_id = Job::where('name', 'Especialista en Recursos Humanos')->first()->id;
        $employee19->user_id = null;
        $employee19->status = 1;
        $employee19->save();

        $employee20 = new Employee();
        $employee20->name = 'Valeria';
        $employee20->firts_last_name = 'Gómez';
        $employee20->second_last_name = 'Salazar';
        $employee20->image = null;
        $employee20->cv = null;
        $employee20->birthdate = '1993-06-25';
        $employee20->gender = 'Femenino';
        $employee20->phone = '74455678';
        $employee20->email = null;
        $employee20->type_document = 'Documento Nacional';
        $employee20->document_number = '56789012';
        $employee20->document_complement = null;
        $employee20->ci_extension_id = CiExtension::inRandomOrder()->first()->id;
        $employee20->address_1 = 'Calle López 456, La Paz, Bolivia';
        $employee20->address_2 = null;
        $employee20->previous_work_details = 'Especialista en Recursos Humanos en HR Solutions.';
        $employee20->start_date = '2021-07-15';
        $employee20->final_date = null;
        $employee20->additional_employee_details = null;
        $employee20->working_time = null;
        $employee20->days_vacations = null;
        $employee20->vacation_start_date = null;
        $employee20->vacation_final_date = null;
        $employee20->take_vacation = 0;
        $employee20->contract_id = Contract::inRandomOrder()->first()->id;
        $employee20->job_id = Job::where('name', 'Especialista en Recursos Humanos')->first()->id;
        $employee20->user_id = null;
        $employee20->status = 1;
        $employee20->save();
    }
}
