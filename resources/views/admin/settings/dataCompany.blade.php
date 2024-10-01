@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador Configuraciones de la Empresa</h1>
@stop

@section('content')
    <h4 class="text-info">Datos de la Empresa</h4>
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



            {!! Form::model($settings, [
                'route' => ['admin.settings.updateDataCompany', $settings],
                'method' => 'put',
                'enctype' => 'multipart/form-data',
            ]) !!}

            <div class="form-group m-2">

                <P class="">
                    Logo actual
                </P>
                <img src="{{ 'data:image/png;base64,' . $settings->company_logo }}" alt="" class=""
                    width="150px">


            </div>

            <div class="form-group m-2">
                {!! Form::label('company_logo', 'Adjunte un logo: ') !!}
                <P class="">
                    Por recomentacion use una imagen de 300x300 y sin fondo
                </P>
                {!! Form::file('company_logo', null, [
                    'class' => 'form-control',
                    'placeholder' => 'ingrese el segundo apellido',
                ]) !!}

                @error('company_logo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('company_name', 'Nombre de la empresa: ') !!}
                {!! Form::text('company_name', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese el nombre de la empresa',
                ]) !!}

                @error('company_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('company_email', 'Email de la empresa: ') !!}
                {!! Form::text('company_email', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese un email',
                ]) !!}
                @error('company_email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('company_phone', 'Número de la empresa: ') !!}
                {!! Form::text('company_phone', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese un número de teléfono',
                ]) !!}
                @error('company_phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('company_address', 'Dirección de la empresa: ') !!}
                {!! Form::text('company_address', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'Ingrese la dirección de la empresa',
                ]) !!}
                @error('company_address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('company_message', 'Mensaje de la empresa: ') !!}
                {!! Form::textarea('company_message', null, [
                    'class' => 'textarea w-50',
                    'placeholder' => 'Ingrese un mensaje de la empresa',
                ]) !!}
                @error('company_message')
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
