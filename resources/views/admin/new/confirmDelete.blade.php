@extends('adminlte::page')

@section('title', 'Eliminar noticia')

@section('content_header')
    <h1>Administrador de noticias</h1>
@stop

@section('content')
    <h4 class="text-info">Eliminar la noticia</h4>
    <div class="card fondo-card fondo">
        <div class="card-body overley">

            @include('admin.new.partials.nav')


            <div class="card-body shadow-lg">
                <h4 class="text-danger">Esta seguro que desea eliminar la noticia: </h4>

                <p class=" text-lg"><b>Título de la noticia: </b> {{ $new->title }}</p>
                <p class=" text-lg"><b>Creador de la noticia: </b> {{ $new->user->name }}</p>
                <div>
                    {!! Form::open(['route' => ['news.destroy', $new], 'method' => 'delete']) !!}


                    <a href="{{ route('news.inactivate', $new) }}" class="btn btn-danger">Eliminar
                    </a>


                    <a href="{{ route('news.index') }}" class="btn btn-primary mx-2">Cancelar</a>

                    @can('news.destroy')
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
