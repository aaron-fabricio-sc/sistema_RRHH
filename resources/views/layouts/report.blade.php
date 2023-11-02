<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/pdf.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header">
        <div class="header_logo">
            LOGO
        </div>
        <div class="header_description">
            <h1>Empresa Fernandez</h1>

        </div>
    </div>

    @yield('content')

</body>

</html>
