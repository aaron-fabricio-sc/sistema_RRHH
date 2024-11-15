<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        /* 
            "title" => $this->faker->text(50),
            "body" => $this->faker->paragraph(200),
            'user_id' => User::all()->random()->id,

            "status" => $this->faker->randomElement([0, 1]) */

        $news1 = new News();
        $news1->title = 'Nueva actualización de software';
        $news1->body = 'Se informa a todos los empleados que se ha lanzado una nueva actualización de software para mejorar la seguridad y el rendimiento de los sistemas. Por favor, asegúrense de instalar la actualización en sus dispositivos lo antes posible.';
        $news1->user_id = 2;
        $news1->status = 1;
        $news1->save();

        $news2 = new News();
        $news2->title = 'Capacitación en Ventas Inmobiliarias';
        $news2->body = 'Se convoca a todos los agentes inmobiliarios a una sesión de capacitación sobre técnicas avanzadas de ventas y gestión de clientes en el sector inmobiliario. La capacitación se llevará a cabo el próximo lunes a las 10:00 a.m. en la sala de conferencias.';
        $news2->user_id = 2;
        $news2->status = 1;
        $news2->save();
        $news3 = new News();
        $news3->title = 'Nueva Asociación con Desarrolladora';
        $news3->body = 'La empresa Hernández ha firmado una asociación estratégica con la desarrolladora SolInmobiliaria para ofrecer nuevas propiedades exclusivas en áreas de alto crecimiento. Los agentes interesados pueden obtener más información en la reunión de equipo del miércoles.';
        $news3->user_id = 2;
        $news3->status = 1;
        $news3->save();
        $news4 = new News();
        $news4->title = 'Política de Teletrabajo Actualizada';
        $news4->body = 'A partir del próximo mes, se permitirá que ciertos roles administrativos realicen teletrabajo. Los empleados interesados en esta opción deben hablar con su supervisor para revisar los requisitos y protocolos de la política actualizada.';
        $news4->user_id = 2;
        $news4->status = 1;
        $news4->save();
        $news5 = new News();
        $news5->title = 'Lanzamiento del Nuevo Portal de Clientes';
        $news5->body = 'Hemos lanzado un nuevo portal de clientes que permite a los propietarios y compradores realizar un seguimiento de sus transacciones en tiempo real. Por favor, asegúrense de familiarizarse con el sistema para poder ayudar a los clientes a utilizarlo de manera efectiva.';
        $news5->user_id = 2;
        $news5->status = 1;
        $news5->save();

        $news6 = new News();
        $news6->title = 'Apertura de Nuevas Oficinas';
        $news6->body = 'La empresa Hernández inaugurará una nueva oficina en el centro de la ciudad el próximo mes, con el objetivo de ampliar nuestra presencia en el mercado. Invitamos a todos los empleados a asistir a la ceremonia de apertura.';
        $news6->user_id = 2;
        $news6->status = 1;
        $news6->save();
        $news7 = new News();
        $news7->title = 'Actualización de Políticas de Seguridad';
        $news7->body = 'Hemos actualizado nuestras políticas de seguridad para proteger mejor la información de nuestros clientes. Se solicita a todos los empleados que revisen el documento actualizado y se adhieran a los nuevos lineamientos.';
        $news7->user_id = 2;
        $news7->status = 1;
        $news7->save();
        $news8 = new News();
        $news8->title = 'Programa de Incentivos para Agentes';
        $news8->body = 'La empresa Hernández ha lanzado un programa de incentivos para agentes inmobiliarios que alcancen o superen sus metas de ventas trimestrales. Los detalles están disponibles en el portal interno de la compañía.';
        $news8->user_id = 2;
        $news8->status = 1;
        $news8->save();
        $news9 = new News();
        $news9->title = 'Lanzamiento de Nuevas Propiedades Residenciales';
        $news9->body = 'Estamos emocionados de anunciar la disponibilidad de nuevas propiedades residenciales en las zonas norte y sur de la ciudad. Se realizará una presentación exclusiva para el equipo de ventas esta semana.';
        $news9->user_id = 2;
        $news9->status = 1;
        $news9->save();
        $news10 = new News();
        $news10->title = 'Recordatorio de Auditoría Interna';
        $news10->body = 'La auditoría interna anual se llevará a cabo la próxima semana. Pedimos a todos los departamentos que preparen la documentación necesaria y estén disponibles para cualquier consulta del equipo de auditoría.';
        $news10->user_id = 2;
        $news10->status = 1;
        $news10->save();
    }
}
