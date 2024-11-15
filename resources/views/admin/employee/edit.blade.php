@extends('adminlte::page')

@section('title', 'Crear empleado')

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="title_view">Crear un nuevo Empleado</h4>
    <div class="card fondo">

        <div class="overley">
            <div class="card-body carta_formulario ">
                @include('admin.employee.partials.nav')

                {!! Form::model($employee, [
                    'route' => ['admin.employees.update', $employee],
                    'method' => 'put',
                    'files' => true,
                ]) !!}

                @include('admin.employee.partials.form')
                <div></div>
                <div class="form-group">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}


            </div>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

@stop

@section('js')

@stop
