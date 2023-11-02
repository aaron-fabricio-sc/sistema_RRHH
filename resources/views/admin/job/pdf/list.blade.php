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

        <h1>Trabajos Activos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Departamento</th>

                    <th>Estado</th>
                    <th>Fecha_Creada</th>

                    <th>Ultima Actualización</th>
                </tr>




            </thead>
            <tbody>
                @foreach ($actives as $active)
                    <tr>
                        <td>{{ $active->id }}</td>
                        <td>{{ $active->name }}</td>
                        <td>{{ $active->description }}</td>
                        <td>{{ $active->departament->name }}</td>
                        @if ($active->status === 1)
                            <td>Activo</td>
                        @endif



                        @php
                            $dateActive = $active->created_at;
                            
                            $newDateActive = date('d-m-Y H:i:s', strtotime($dateActive));
                            
                            $dateUpdate = $active->updated_at;
                            
                            $newDateUpdate = date('d-m-Y H:i:s', strtotime($dateUpdate));
                        @endphp

                        <td class="dates">{{ $newDateActive }}</td>


                        <td class="dates">{{ $newDateUpdate }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>

    <div class="page-break"></div>

    <div class="container">

        <h1>Trabajos Inactivos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Departamento</th>
                    <th>Estado</th>
                    <th>Fecha_Creada</th>
                    <th>Ultima Actualización</th>
                </tr>




            </thead>
            <tbody>
                @foreach ($inactives as $inactives)
                    <tr>
                        <td>{{ $inactives->id }}</td>
                        <td>{{ $inactives->name }}</td>
                        <td>{{ $inactives->description }}</td>
                        <td>{{ $inactives->departament->name }}</td>
                        @if ($inactives->status === 0)
                            <td>Inactivo</td>
                        @endif
                        @php
                            $dateCreateInactive = $inactives->created_at;
                            
                            $newDataCreate = date('d-m-Y H:i:s', strtotime($dateCreateInactive));
                            
                            $dateUpdateInactive = $inactives->updated_at;
                            
                            $newDateUpdate = date('d-m-Y H:i:s', strtotime($dateUpdateInactive));
                        @endphp

                        <td class="dates">{{ $newDataCreate }}</td>


                        <td class="dates">{{ $newDateUpdate }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


</body>

</html>
