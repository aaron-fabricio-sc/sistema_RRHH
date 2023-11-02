@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrador de las licencias</h1>
@stop

@section('content')
    <h4 class="text-info">Editar Licencia</h4>
    <div class="card fondo">


        <div class="card-body overley">

            @include('admin.license.partials.nav')
            {!! Form::model($license, ['route' => ['admin.licenses.update', $license], 'method' => 'put']) !!}

            @include('admin.license.partials.form')


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
