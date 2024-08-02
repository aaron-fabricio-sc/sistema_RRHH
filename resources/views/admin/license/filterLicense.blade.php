@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrador de las licencias</h1>
@stop

@section('content')
    <h4 class="text-info">Filtrar por fecha</h4>
    <div class="card fondo">


        <div class="card-body overley">

            @include('admin.license.partials.nav')
            {!! Form::open(['route' => 'admin.licenses.filterLicenseReport']) !!}
            @livewire('license.license-report')

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
