@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrador de las licencias</h1>
@stop

@section('content')
    <h4 class="text-info">Solicitar una Licencia</h4>
    <div class="card fondo">


        <div class="card-body overley">
            @if (session('message'))
                <div class="alert alert-success">
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
            @if (session('message-danger'))
                <div class="alert alert-danger">
                    <strong>{{ session('message-danger') }}</strong>
                </div>
            @endif
            @include('admin.license.partials.nav')
            {!! Form::open(['route' => 'admin.licenses.requets']) !!}
            {!! Form::hidden('userId', $userId, [null]) !!}
            <div class="form-group">
                {!! Form::label('type_license', 'Tipo de licencia: ') !!}
                {!! Form::select('type_license', $licenses, null, [
                    'class' => 'textarea w-50',
                ]) !!}

                @error('type_license')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('start_date', 'Fecha de inicio:') !!}
                {!! Form::date('start_date', null, [
                    'class' => 'textarea w-50',
                ]) !!}


                @error('start_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('final_date', 'Fecha final:') !!}
                {!! Form::date('final_date', null, [
                    'class' => 'textarea w-50',
                ]) !!}


                @error('final_date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <div class="form-group">
                {!! Form::submit('Solicitar', ['class' => 'btn btn-primary']) !!}
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
