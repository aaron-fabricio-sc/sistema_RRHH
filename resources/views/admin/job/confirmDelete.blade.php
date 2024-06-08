@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador de los cargos o trabajos de la empresa</h1>
@stop

@section('content')
    <h4 class="text-info">Eliminar el Cargo o Trabajo</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">

            @include('admin.job.partials.nav')

            <div class="card-body shadow-lg">
                <h4 class="text-danger">Esta seguro que desea eliminar el Cargo o trabajo: </h4>

                <p class=" text-lg"><b>Nombre: </b> {{ $job->name }}</p>
                <p class=" text-lg"><b>Descripción: </b> {{ $job->description }}</p>
                <div>
                    {!! Form::open(['route' => ['admin.jobs.destroy', $job], 'method' => 'delete']) !!}


                    <a href="{{ route('admin.jobs.inactivate', $job) }}" class="btn btn-danger">Eliminar
                    </a>


                    <a href="{{ route('admin.jobs.index') }}" class="btn btn-primary mx-2">Cancelar</a>

                    @can('admin.jobs.destroy')
                        {!! Form::submit('Eliminar Permanentemente', ['class' => 'btn btn-danger']) !!}
                    @endcan

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
