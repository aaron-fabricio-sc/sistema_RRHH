<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PDF LIST</title>


    <style>
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }


        body {
            padding: 100px 80px 40px 100px;
            font-family: sans-serif;
        }


        .header_description {
            display: inline-block;
            width: 70%;
            text-align: center;
        }

        .title {



            margin: 0 auto;

            font-size: 30px;


            border-top: solid 2px black;
            border-bottom: solid 2px black;
            margin: 5px 0;

        }

        table {
            border-collapse: collapse;

            margin: 15px auto;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            font-size: 16px
        }

        .container {
            width: 100%;
            text-align: center
        }

        .container h1 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .dates {

            font-size: 12px;


        }

        .page-break {
            page-break-after: always;
        }

        p {
            padding: 3px 0px;
        }

        table {
            box-sizing: border-box;
        }

        h2 {
            font-size: 22px;

        }
    </style>
</head>

<body>
    <div class="header">
        <img src="imagenes/logoOsinfondo.png" alt="alskdnsa" width="150px">


        <div class="header_description">
            <p class="title">Empresa Fernández </p>
            <p>"Empresa Fernandez: Líder en bienes raíces, ofreciendo servicios integrales y garantizando la
                satisfacción de nuestros clientes."</p>
            <p>CEL. 706681335</p>
            <p>EMAIL. aaronfabricio00@gmail.com</p>

        </div>




    </div>

    <div class="container">
        @php
            $text = '';
            if ($diferencia <= 0) {
                $text = 'El empleado Sobrepaso sus dias de licencia';
            } else {
                $text = 'El empleado no ha sobrepasado sus dias de licencia';
            }
        @endphp
        <h3>Reporte de Licencias del o la empleado/a
        </h3>
        <h1>{{ $employee->name }} {{ $employee->firts_last_name }}
            {{ $employee->second_last_name }}</h1>
        <h3>Fecha:</h3>
        @php

            switch ($month) {
                case '01':
                    $month = 'Enero';
                    break;
                case '02':
                    $month = 'Febrero';
                    break;
                case '03':
                    $month = 'Marzo';
                    break;
                case '04':
                    $month = 'Abril';
                    break;
                case '05':
                    $month = 'Mayo';
                    break;
                case '06':
                    $month = 'Junio';
                    break;
                case '07':
                    $month = 'Julio';
                    break;
                case '08':
                    $month = 'Agosto';
                    break;
                case '09':
                    $month = 'Septiembre';
                    break;
                case '10':
                    $month = 'Octubre';
                    break;
                case '11':
                    $month = 'Noviembre';
                    break;
                case '12':
                    $month = 'Diciembre';
                    break;

                default:
                    # code...
                    break;
            }
        @endphp
        <h2>{{ $month }}-{{ $year }}</h2>
        <p>Maximo de días de permiso por mes <span style="font-size: 22px; font-weight: 700">{{ $maximoDias }}</span>
        </p>
        <p> Cantidad de dias tomadas de licencia <span style="font-size: 22px; font-weight: 700">
                {{ $count }}</span> </p>
        <p>{{ $text }}</p>
        <table>
            <thead>
                <tr>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Dias</th>
                    <th>Estado</th>


                </tr>




            </thead>
            <tbody>
                @foreach ($licenses as $license)
                    <tr>




                        @php
                            $dateI = $license->start_date;
                            $dateF = $license->final_date;

                            $newDateI = date('d-m-Y', strtotime($dateI));
                            $newDateF = date('d-m-Y', strtotime($dateF));

                            $status;
                            if ($license->status_license == 2) {
                                $status = 'Aceptado';
                            } else {
                                $status = 'Rechazado';
                            }

                        @endphp

                        <td>{{ $dateI }}</td>
                        <td>{{ $dateF }}</td>


                        <td>{{ $license->days }}</td>


                        @if ($license->status_license == 2)
                            <td style="color:green;">{{ $status }}</td>
                        @else
                            <td style="color:red;">{{ $status }}</td>
                        @endif


                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>




</body>

</html>
