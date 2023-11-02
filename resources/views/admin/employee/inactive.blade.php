@extends('adminlte::page')

@section('title', 'Lista de empleados')

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="text-info">Lista de los empleados inactivos</h4>

    <div class="card p-3">
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
            @include('admin.employee.partials.nav')
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped tabla-color " id="employees">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Departamento </th>

                                    <th>Estado</th>

                                    <th>Curriculum</th>


                                    @can('admin.employees.activate')
                                        <th class="text-info">Reestablecer</th>
                                    @endcan


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->firts_last_name }}</td>
                                        <td>{{ $employee->second_last_name }}</td>
                                        @if (!$employee->department)
                                            <td><small class="text-danger">Vacio</small></td>
                                        @else
                                            <td>{{ $employee->department->name }}</td>
                                        @endif

                                        <td>
                                            <b class="text-danger">Inactivo</b>
                                        </td>
                                        <td>
                                            <a href="/archivos/{{ $employee->cv }}" target="_blank"
                                                class="btn btn-secondary btn-sm"><i class="fas fa-print"></i></a>
                                        </td>
                                        @can('admin.employees.activate')
                                            <td>

                                                <a class="btn btn-info btn-sm m-1"
                                                    href="{{ route('admin.employees.activate', $employee) }}"><i
                                                        class="fas fa-clipboard-check"></i></a>



                                            </td>
                                        @endcan

                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Departamento </th>

                                    <th>Estado</th>
                                    <th>Curriculum</th>
                                    <th>Acciones</th>


                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>


@stop

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

@stop

@section('js')


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"></script>

    <script>
        var table = new DataTable('#employees', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
        });
        $('#employees').DataTable();
    </script>



@stop
