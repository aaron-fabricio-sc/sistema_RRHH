@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador del área de asistencias</h1>
@stop

@section('content')
    <h4 class="text-info">Generar Reporte</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">
            @include('attendance.partials.nav')
            {!! Form::open(['route' => 'attendances.dataReport']) !!}
            @livewire('attendance.attendance-report')
            <div class="form-group">
                {!! Form::select('month', $month, null, ['class' => 'w-50 textarea']) !!}
            </div>

            <div class="form-group">
                {!! Form::select('year', $years, null, ['class' => 'w-50 textarea']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Generar', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}



        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @livewireStyles
@stop

@section('js')

    @livewireScripts
@stop
