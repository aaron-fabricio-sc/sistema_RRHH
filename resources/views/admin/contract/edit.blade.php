@extends('adminlte::page')

@section('title', 'Actualizar Contrato')

@section('content_header')
    <h1>Administrador de tipo de contractos.</h1>
@stop

@section('content')
    <h4 class="text-info">Actualizar Contrato</h4>
    <div class="card fondo">
        <div class="card-body overley">

            @include('admin.contract.partials.nav')
            {!! Form::model($contract, ['route' => ['admin.contracts.update', $contract], 'method' => 'put']) !!}

            @include('admin.contract.partials.form')
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
