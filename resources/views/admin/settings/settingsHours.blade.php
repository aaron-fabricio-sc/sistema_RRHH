@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador Configuraciones</h1>
@stop

@section('content')
    <h4 class="text-info">Administrador</h4>
    <div class="card fondo-card fondo">
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
            {!! Form::model($settings, ['route' => ['admin.settings.update', $settings], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('entrance', 'Hora de Entrada: ') !!}
                {!! Form::time('entrance', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese la hora de entrada',
                ]) !!}

                @error('entrance')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('departure', 'Hora de Salida: ') !!}
                {!! Form::time('departure', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese la hora de salida',
                ]) !!}
                @error('departure')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('arrivalTolerance', 'Tolerancia de llegada: ') !!}
                {!! Form::select(
                    'arrivalTolerance',
                    array_combine(
                        range(5, 60, 5),
                        array_map(function ($value) {
                            return sprintf('%02d minutos', $value);
                        }, range(5, 60, 5)),
                    ),
                    null,
                    ['class' => 'form-control w-50'],
                ) !!}
                @error('arrivalTolerance')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('totalLicenseDays', 'Maximo de dias de licencia: ') !!}
                {!! Form::number('totalLicenseDays', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'Maximo de dias de licencia',
                ]) !!}
                @error('totalLicenseDays')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
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
