@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrador de las licencias</h1>
@stop

@section('content')
    <h4 class="text-info">Crear una nueva Licencia</h4>
    <div class="card fondo">


        <div class="card-body overley">

            @include('admin.license.partials.nav')
            {!! Form::open(['route' => 'admin.licenses.store']) !!}

            @include('admin.license.partials.form')


            <div class="form-group">
                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
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
