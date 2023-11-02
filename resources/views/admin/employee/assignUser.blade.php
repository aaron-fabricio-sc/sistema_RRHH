@extends('adminlte::page')

@section('title', 'Asignar Usuario')

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="title_view">Asignar un usuario</h4>
    <div class="card fondo">
        <div class="overley">

            @include('admin.employee.partials.nav')

            <div class="card-body shadow-lg">
                <h4 class="text-primary">Asignar un usuario al empleado </h4>

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
                    {!! Form::open(['route' => ['admin.employees.assignUser', $employee], 'method' => 'put']) !!}



                    <div class="form-group">
                        {!! Form::label('user_id', 'Seleccione un usuario:* ') !!}
                        {!! Form::select('user_id', $users, null, ['class' => 'form-select']) !!}

                    </div>


                    <div class="form-group">
                        {!! Form::submit('Asignar', ['class' => 'btn btn-primary']) !!}
                    </div>


                    {!! Form::close() !!}


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

@stop
