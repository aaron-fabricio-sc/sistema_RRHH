@extends('adminlte::page')

@section('title', 'Lista de empleados')

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="text-info">Lista de los empleados</h4>
    {{-- 
 @livewire('employee.employee-index')
 --}}

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
                @include('admin.employee.partials.nav')


                <div class="table-responsive">
                    <table class="table table-striped" id="employees">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Departamento</th>

                                <th>Estado</th>
                                <th>Curriculum</th>

                                @can('admin.employees.show')
                                    <th class="text-info">Ver más</th>
                                @endcan
                                @can('admin.employees.edit')
                                    <th class="text-primary">Editar</th>
                                @endcan
                                @can('admin.employees.viewConfirmDelete')
                                    <th class="text-danger">Eliminar</th>
                                @endcan

                                @can('admin.employees.viewAssignUser')
                                    <th class="text-warning">Asignar Usuario</th>
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
                                        <b class="text-success">Activo</b>
                                    </td>
                                    <td>
                                        <a href="/archivos/{{ $employee->cv }}" target="_blank"
                                            class="btn btn-secondary btn-sm"><i class="fas fa-print"></i></a>
                                    </td>

                                    @can('admin.employees.show')
                                        <td>

                                            <a class="btn btn-info btn-sm m-1"
                                                href="{{ route('admin.employees.show', $employee) }}"><i
                                                    class="fas fa-edit"></i></a>

                                        </td>
                                    @endcan
                                    @can('admin.employees.edit')
                                        <td>

                                            <a class="btn btn-primary btn-sm m-1"
                                                href="{{ route('admin.employees.edit', $employee) }}"><i
                                                    class="fas fa-edit"></i></a>

                                        </td>
                                    @endcan
                                    @can('admin.employees.viewConfirmDelete')
                                        <td>

                                            <a href="{{ route('admin.employees.viewConfirmDelete', $employee->id) }}"
                                                class="btn btn-danger btn-sm  m-1"> <i class="fas fa-trash-alt"></i> </a>

                                        </td>
                                    @endcan

                                    @can('admin.employees.viewAssignUser')
                                        <td> <a href="{{ route('admin.employees.viewAssignUser', $employee->id) }}"
                                                class="btn btn-warning btn-sm  m-1"> <i class="fas fa-user"></i> </a></td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Departamento</th>

                                <th>Estado</th>
                                <th>Curriculum</th>

                                @can('admin.employees.show')
                                    <th class="text-info">Ver más</th>
                                @endcan
                                @can('admin.employees.edit')
                                    <th class="text-primary">Editar</th>
                                @endcan
                                @can('admin.employees.viewConfirmDelete')
                                    <th class="text-danger">Eliminar</th>
                                @endcan

                                @can('admin.employees.viewAssignUser')
                                    <th class="text-warning">Asignar Usuario</th>
                                @endcan



                            </tr>
                        </tfoot>
                    </table>
                </div>



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
        var table = new DataTable('#employees', {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            responsive: true,
            autoWidth: false,

        });
    </script>



@stop
