@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador de los cargos o trabajos de la empresa</h1>
@stop

@section('content')



    <h4 class="text-info">Lista de los trabajos</h4>
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



            <div class="card-blue">
                @include('admin.job.partials.nav')
                <table class="table table-striped" id="jobs">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Departamento</th>

                            <th>Estado</th>

                            @can('admin.jobs.edit')
                                <th class="text-info">Editar</th>
                            @endcan

                            @can('admin.jobs.viewConfirmDelete')
                                <th class="text-danger">Eliminar</th>
                            @endcan


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->description }}</td>
                                @if (!$job->departament)
                                    <td class="text-danger">
                                        <small>Dato Eliminado, asígnele un nuevo departamento..</small>
                                    </td>
                                @else
                                    <td>{{ $job->departament->name }}</td>
                                @endif

                                <td>
                                    <b class="text-success">Activo</b>
                                </td>


                                @can('admin.jobs.edit')
                                    <td><a class="btn btn-info" href="{{ route('admin.jobs.edit', $job) }}"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
                                @endcan


                                @can('admin.jobs.viewConfirmDelete')
                                    <td>
                                        <a href="{{ route('admin.jobs.viewConfirmDelete', $job->id) }}"
                                            class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Departamento</th>

                            <th>Estado</th>
                            @can('admin.jobs.edit')
                                <th class="text-info">Editar</th>
                            @endcan

                            @can('admin.jobs.viewConfirmDelete')
                                <th class="text-danger">Eliminar</th>
                            @endcan



                        </tr>
                    </tfoot>
                </table>
            </div>
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
