@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador del área de departamentos de la empresa</h1>
@stop

@section('content')
    <h4 class="text-info">Eliminar el Departamento</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">

            @include('admin.department.partials.nav')


            <div class="card-body shadow-lg">
                <h4 class="text-danger">Esta seguro que desea eliminar el Departamento: </h4>

                <p class=" text-lg"><b>Nombre: </b> {{ $department->name }}</p>
                <p class=" text-lg"><b>Descripción: </b> {{ $department->description }}</p>
                <div>
                    {!! Form::open(['route' => ['admin.departments.destroy', $department], 'method' => 'delete']) !!}


                    <a href="{{ route('admin.departments.inactivate', $department) }}" class="btn btn-danger">Eliminar
                    </a>


                    <a href="{{ route('admin.departments.index') }}" class="btn btn-primary mx-2">Cancelar</a>

                    @can('admin.departments.destroy')
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
