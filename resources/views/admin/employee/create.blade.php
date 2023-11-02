@extends('adminlte::page')

@section('title', 'Crear empleado')

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="text-info">Crear un nuevo Empleado</h4>
    <div class="card fondo-card fondo">
        <div class="card-body carta_formulario overley">
            {!! Form::open(['route' => 'admin.employees.store', 'autocomplete' => 'off', 'files' => true]) !!}

            @include('admin.employee.partials.form')

            <div class="form-group">
                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('css')


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@stop
