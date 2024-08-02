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

            margin: auto
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
            font-size: 13px
        }

        .container {
            width: 100%;
            text-align: center
        }

        .container h1 {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .profile {
            margin: 15px 0;

        }

        .profile .text p {
            padding: 8px 0px;
            font-size: 16px;


        }

        .profile .text p span {
            font-weight: bold;
        }

        .profile h1 {
            font-size: 30px;
            margin-bottom: 15px;
            text-align: center;
        }

        .profile h2 {
            font-size: 25px;
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
    </style>
</head>

<body>
    <div class="header">
        <img src="data:image/png;base64,{{ $settings->company_logo }}" alt="alskdnsa" width="150px">


        <div class="header_description">
            <p class="title">{{ $settings->company_name }} </p>
            <p>"{{ $settings->company_message }}"</p>
            <p>DIRECCIÓN : {{ $settings->company_address }}</p>

            <p>CEL : {{ $settings->company_phone }}</p>
            <p>EMAIL : {{ $settings->company_email }}</p>


        </div>





    </div>

    <div class="profile">

        <h1>Información del perfil</h1>
        {{--  @if ($employee->image === null)
            <h2>No tiene foto de perfil</h2>
        @else
            <div>
                <img src="/imagenes/'{{ $employee->image }}" class="img-fluid rounded-circle">
            </div>
        @endif --}}

        <div class="text">
            <p>Nombre: <span>{{ ucwords($employee->name) }}</span> </p>
            <p>Primer Apellido: <span>{{ ucwords($employee->firts_last_name) }}</span> </p>
            <p>Segundo Apellido: <span>{{ ucwords($employee->second_last_name) }}</span></p>
            <p>Fecha de nacimento: <span> {{ $employee->birthdate }} </span></p>
            <p>Genero: <span> {{ $employee->gender }} </span></p>
            <p>Teléfono: <span> {{ $employee->phone }} </span></p>
            <p>Email: <span> {{ $employee->email }} </span></p>
            <p>Tipo de documento: <span> {{ $employee->type_document }} </span></p>
            <p>Número de documento: <span> {{ $employee->document_number }} </span></p>
            @if ($employee->address_1 !== null)
                <p>Primera dirección: <span> {{ $employee->address_1 }} </span></p>
            @endif
            @if ($employee->address_2 !== null)
                <p>Segunda dirección: <span> {{ $employee->address_2 }} </span></p>
            @endif
            @if ($employee->previous_work_details !== null)
                <p>Información del antiguo trabajo: <span> {{ $employee->previous_work_details }} </span></p>
            @endif
            @if ($employee->start_date !== null)
                <p>Fecha de inicio de trabajo: <span> {{ $employee->start_date }} </span></p>
            @endif
            @if ($employee->final_date !== null)
                <p>Fecha final de trabajo: <span> {{ $employee->final_date }} </span></p>
            @endif
            @if ($employee->additional_employee_details !== null)
                <p>Información extra: <span> {{ $employee->additional_employee_details }} </span></p>
            @endif
            @if ($department->name !== null)
                <p>Departamento: <span> {{ $department->name }} </span></p>
            @endif
            @if ($job->name !== null)
                <p>Tipo de trabajo: <span> {{ $job->name }} </span></p>
            @endif
            @if ($contract->type_contract !== null)
                <p>Tipo de contrato: <span> {{ $contract->type_contract }} </span></p>
            @endif

            @if ($user !== null)
                <p>Usuario/a: <span> {{ $user->name }} </span></p>
            @endif


        </div>
    </div>






</body>

</html>
