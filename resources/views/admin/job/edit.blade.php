@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador de los cargos o trabajos de la empresa</h1>
@stop

@section('content')
    <h4 class="text-info">Editar detalles del trabajo</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">
            @include('admin.job.partials.nav')
            {!! Form::model($job, ['route' => ['admin.jobs.update', $job], 'method' => 'put']) !!}

            @include('admin.job.form')


            <div class="form-group">
                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@stop

@section('js')

@stop
