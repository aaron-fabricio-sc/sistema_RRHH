@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador del área de departamentos de la empresa</h1>
@stop

@section('content')
    <h4 class="text-info">Crear un nuevo departamento</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">
            @include('admin.department.partials.nav')
            {!! Form::open(['route' => 'admin.departments.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre: ') !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese el nombre del departamento',
                ]) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('description', 'Descripción: ') !!}
                {!! Form::textarea('description', null, [
                    'class' => ' w-50 textarea',
                    'placeholder' => 'ingrese una descripción',
                ]) !!}
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
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
