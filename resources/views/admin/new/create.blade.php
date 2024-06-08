@extends('adminlte::page')

@section('title', 'Crear una noticia')

@section('content_header')
    <h1>Administrador de noticias.</h1>
@stop

@section('content')
    <h4 class="text-info">Crear una nueva noticia </h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">

            @include('admin.new.partials.nav')
            {!! Form::open(['route' => 'news.store']) !!}

            @include('admin.new.partials.form')
            <div class="form-group">
                {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('css')

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>


@stop
