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

        .detalle {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="data:image/png;base64,.{{ $settings->company_logo }}" alt="alskdnsa" width="150px">


        <div class="header_description">
            <p class="title">{{ $settings->company_name }} </p>
            <p>"{{ $settings->company_message }}"</p>
            <p>DIRECCIÓN : {{ $settings->company_address }}</p>

            <p>CEL : {{ $settings->company_phone }}</p>
            <p>EMAIL : {{ $settings->company_email }}</p>


        </div>





    </div>

    <div class="container">

        <h3 class="detalle">Reporte de asistencia del o la empleado/a
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
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Detalle</th>


                </tr>




            </thead>
            <tbody>
                @foreach ($employeeAttendance as $attendance)
                    <tr>




                        @php
                            $date = $attendance->fecha;

                            $newDate = date('d-m-Y', strtotime($date));

                        @endphp

                        <td>{{ $newDate }}</td>
                        <td>{{ $attendance->entrada }}</td>


                        <td>{{ $attendance->salida }}</td>
                        <td>{{ $attendance->tipo_asistencia }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>




</body>

</html>
