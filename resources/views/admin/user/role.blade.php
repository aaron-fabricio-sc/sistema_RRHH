@extends('adminlte::page')

@section('title', 'Asignar un rol')

@section('content_header')
    <h1>Administrador del los usuarios</h1>
@stop

@section('content')
    <h4 class="text-info">Asignar un rol</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">
            @if (session('message'))
                <p class="alert alert-success">
                    <b>{{ session('message') }}</b>
                </p>
            @endif

            @if (session('danger'))
                <p class="alert alert-danger">
                    <b>{{ session('danger') }}</b>
                </p>
            @endif


            @if (isset($message))
                <p class="alert alert-danger">
                    <b>{{ $message }}</b>
                </p>
            @endif


            <div>
                <p>Nombre: </p>
                <p class="h3 text-warning font-bold">{{ $user->name }}</p>
            </div>

            <h2 class="h5">
                Listado de Roles
            </h2>
            {!! Form::model($user, ['route' => ['admin.users.rol.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $rol)
                <div>
                    <label for="">
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'm-1']) !!}


                        {{ $rol->name }}
                </div>
            @endforeach

            {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary']) !!}
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
