@extends('adminlte::page')

@section('title', 'Crear un usuario')

@section('content_header')
    <h1>Administrador del los usuarios</h1>
@stop

@section('content')
    <h4 class="text-info">Editar el usuario</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">
            @include('admin.user.partials.nav')

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

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
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::text('email', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese un correo',
                ]) !!}
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">


                <h4 class="text-danger">Si no desea actualizar la contraseña no introduzca ningun dato.</h4>
                {!! Form::label('password', 'Contraseña: ') !!}
                {!! Form::password('password', [
                    'class' => 'form-control w-50',
                    'placeholder' => 'Ingrese una contraseña',
                ]) !!}
                @error('password')
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
