@extends('adminlte::page')

@section('title', 'Crear un usuario')

@section('content_header')
    <h1>Administrador del los usuarios</h1>
@stop

@section('content')
    <h4 class="text-info">Crear un nuevo usuario</h4>
    <div class="card fondo-card ">

        <div class="card-body fondo">


            <div class="overley">


                @include('admin.user.partials.nav')


                {!! Form::open(['route' => 'admin.users.store']) !!}

                @include('admin.user.partials.form')
                <div class="form-group">
                    {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

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
