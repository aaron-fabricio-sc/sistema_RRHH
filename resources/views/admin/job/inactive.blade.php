@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador de los cargos o trabajos de la empresa</h1>
@stop

@section('content')



    <h4 class="text-info">Lista de los trabajos inactivos</h4>
    <div class="card fondo">
        @if (session('message'))
            <div class="alert alert-success">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif



        <div class="card-blue overley">


            @include('admin.job.partials.nav')



            <table class="table table-striped" id="jobs">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Departamento</th>

                        <th>Estado</th>
                        <th class="text-info">Reestablecer</th>


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
                                <b class="text-danger">Inactivo</b>
                            </td>

                            <td>


                                <a href="{{ route('admin.jobs.activate', $job) }}" class="btn btn-info"><i
                                        class="fas fa-clipboard-check"></i></a>
                            </td>

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
                        <th>Reestablecer</th>


                    </tr>
                </tfoot>
            </table>
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
