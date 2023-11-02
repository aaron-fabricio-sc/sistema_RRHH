@extends('adminlte::page')

@section('title', 'Eliminar Empleado')

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="title_view">Eliminar el Empleado</h4>
    <div class="card fondo-card">
        <div class="card-body">

            @include('admin.employee.partials.nav')

            <div class="card">
                <div class="card-body shadow-lg">
                    <h4 class="text-danger">Esta seguro que desea eliminar el empleado: </h4>

                    <p class=" text-lg"><b>Nombre: </b> {{ $employee->name }}</p>
                    <p class=" text-lg"><b>Apellidos: </b> {{ $employee->firts_last_name }} {{ $employee->second_last_name }}
                    </p>
                    <p class="text-lg">
                        <b>Departamento: </b> {{ $employee->department->name }}
                    </p>
                    <p class="text-lg">
                        <b>Cargo: </b> {{ $employee->job->name }}
                    </p>
                    <div>
                        {!! Form::open(['route' => ['admin.employees.destroy', $employee], 'method' => 'delete']) !!}


                        <a href="{{ route('admin.employees.inactivate', $employee) }}" class="btn btn-danger">Eliminar
                        </a>


                        <a href="{{ route('admin.employees.index') }}" class="btn btn-primary mx-2">Cancelar</a>

                        @can('admin.employees.destroy')
                            {!! Form::submit('Eliminar Permanentemente', ['class' => 'btn btn-danger']) !!}
                        @endcan

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>




        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
