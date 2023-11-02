@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Noticias de la empresa</h1>
@stop

@section('content')


    @php
        $data = count($News);
    @endphp
    <h4 class="text-info">Noticias</h4>
    <div class="card fondo">

        <div class="overley">
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

            @if ($data == 0)
                <h2>NO HAY DATOS...</h2>
            @endif
            @foreach ($News as $new)
                <div class="card-blue border-b-2 borde_noticias">
                    <div class="d-flex justify-content-between">
                        <p><span class="text-success">Fecha de publicacion: </span>{{ $new->created_at }}</p>


                        <p>

                            <span class="text-success">Creado por: </span>


                            {{ $new->user->name }}


                        </p>

                        <div class="d-flex">
                            <div class="px-2">
                                <b>Editar</b>
                                @can('admin.contracts.edit')
                                    <a class="btn btn-info " href="{{ route('news.edit', $new) }}"><i
                                            class="fas fa-edit"></i></a>
                                @endcan
                            </div>

                            <div>
                                <b>
                                    Eliminar
                                </b>
                                @can('admin.contracts.viewConfirmDelete')
                                    <a href="{{ route('news.viewConfirmDelete', $new->id) }}" class="btn btn-danger"> <i
                                            class="fas fa-trash-alt"></i></a>
                                @endcan
                            </div>




                        </div>
                    </div>

                    <h2>{{ $new->title }}</h2>

                    <div>
                        @php
                            echo htmlspecialchars_decode($new->body);
                        @endphp
                    </div>





                </div>
            @endforeach


        </div>

    </div>



@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"></script>

    <script>
        $('#jobs').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            responsive: true,
            autoWidth: false,
        });
    </script>
@stop
