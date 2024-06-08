@extends('adminlte::page')

@section('title', 'OMNIPRO')

@section('content_header')
    <h1>Administrador del área de departamentos de la empresa</h1>
@stop

@section('content')
    <h4 class="text-danger">Departamentos Inactivos</h4>
    <div class="card fondo">


        <div class="card-blue overley">
            @include('admin.department.partials.nav')
            <table class="table table-striped" id="departments">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th class="text-info">Reestablecer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr>
                            <td> {{ $department->id }}</td>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td>
                            <td>
                                <b class="text-danger">Inactivo</b>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.departments.activate', $department) }}"><i
                                        class="fas fa-clipboard-check"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

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
            $('#departments').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
                responsive: true,
                autoWidth: false,
            });
        </script>
    @stop
