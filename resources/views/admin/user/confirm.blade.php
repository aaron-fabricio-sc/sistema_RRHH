@extends('adminlte::page')

@section('title', 'Eliminar el usuario.')

@section('content_header')
    <h1>Administrador del los usuarios</h1>
@stop

@section('content')
    <h4 class="text-info">Eliminar usuario</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">

            @include('admin.user.partials.nav')


            <div class="card-body shadow-lg">
                <h4 class="text-danger">Esta seguro que desea eliminar al usuario: </h4>

                <p><b>Nombre: </b> {{ $user->name }}</p>
                <p><b>Correo: </b> {{ $user->email }}</p>
                <div>
                    {!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'delete']) !!}



                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary ml-2">Cancelar</a>
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
