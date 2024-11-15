@extends('adminlte::page')

@section('title', 'Editar una noticia')

@section('content_header')
    <h1>Administrador de noticias.</h1>
@stop

@section('content')
    <h4 class="text-info">Editar la noticia </h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">

            @include('admin.new.partials.nav')
            {!! Form::model($new, ['route' => ['news.update', $new], 'method' => 'put']) !!}


            <div class="form-group">
                {!! Form::label('title', 'Titulo: ') !!}
                {!! Form::text('title', null, [
                    'class' => 'form-control w-50',
                    'placeholder' => 'ingrese el tipo de contrato',
                ]) !!}

                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            {{--      <div class="form-group" id="textoPlugin">
                {!! Form::label('body', 'Descripción: ') !!}
                {!! Form::textarea('body', null, [
                    'class' => 'textoPlugin',
                    'placeholder' => 'ingrese una descripción',
                ]) !!}
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}

            <div class="form-group">
                {!! Form::label('body', 'Descripción: ') !!}
                {!! Form::textarea('body', null, [
                    'class' => 'textarea w-50',
                    'placeholder' => 'ingrese una descripción',
                ]) !!}
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div>
                {!! Form::label('user_id', 'Editor de la noticia: ') !!}
                {!! Form::hidden('user_id', $user->id, [null]) !!}
                <p class="textarea w-50">{{ $user->name }}</p>

                @error('user_id')
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

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@stop

@section('js')
    {{--  <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}


@stop
