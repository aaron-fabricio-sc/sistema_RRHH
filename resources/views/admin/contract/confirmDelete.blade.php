@extends('adminlte::page')

@section('title', 'Eliminar Contracto')

@section('content_header')
    <h1>Administrador de tipo de contractos.</h1>
@stop

@section('content')
    <h4 class="text-info">Eliminar contrato</h4>
    <div class="card fondo">
        <div class="card-body overley">

            @include('admin.contract.partials.nav')


            <div class="card-body shadow-lg">
                <h4 class="text-danger">Esta seguro que desea eliminar el contrato: </h4>

                <p class=" text-lg"><b class="h3">Tipo de contrato: </b> {{ $contract->type_contract }}</p>
                <p class=" text-lg"><b class="h3">Descripción: </b> {{ $contract->description }}</p>
                <div>
                    {!! Form::open(['route' => ['admin.contracts.destroy', $contract], 'method' => 'delete']) !!}


                    <a href="{{ route('admin.contracts.inactivate', $contract) }}" class="btn btn-danger">Eliminar
                    </a>


                    <a href="{{ route('admin.contracts.index') }}" class="btn btn-primary mx-2">Cancelar</a>

                    @can('admin.contracts.destroy')
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
