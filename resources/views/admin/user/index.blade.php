@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrador de los usuarios.</h1>
@stop

@section('content')



    <h4 class="text-info">Lista de los trabajos</h4>
    <div class="card  fondo">
        <div class="overley">
            @if (session('message'))
                <p class="alert alert-success">
                    <b>{{ session('message') }}</b>
                </p>
            @endif

            @if (session('danger'))
                <p class="alert alert-danger">
                    <b>{{ session('danger') }}</b>
                </p>
            @endif

            <div class="card-blue">


                <div class="d-flex w-100 justify-evenly ">
                    @include('admin.user.partials.nav')

                </div>



                <table class="table table-striped mt-2" id="users">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            @can('admin.users.rol')
                                <th>Roles</th>
                            @endcan
                            @can('admin.users.rol')
                                <th>Asignar rol </th>
                            @endcan

                            @can('admin.users.edit')
                                <th class="text-info">Edicion</th>
                            @endcan

                            @can('admin.users.destroy')
                                <th class="text-danger">Eliminar</th>
                            @endcan






                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @if ($user->id === 1)
                                <?php
                                
                                continue;
                                
                                ?>
                            @endif


                            <tr>
                                <td>{{ $user->id }}</td>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                @can('admin.users.rol')
                                    <td>
                                        @foreach ($user->roles as $role)
                                            -{{ $role->name }}
                                        @endforeach
                                    </td>
                                @endcan
                                @can('admin.users.rol')
                                    <td><a class="btn btn-secondary" href="{{ route('admin.users.rol', $user) }}">
                                            <i class="fas fa-user-tag "></i>

                                        </a>
                                    </td>
                                @endcan
                                @can('admin.users.edit')
                                    <td><a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}"><i
                                                class="fas fa-edit"></i></a>

                                    </td>
                                @endcan
                                @can('admin.users.destroy')
                                    <td>
                                        <a href="{{ route('admin.users.viewConfirmDelete', $user->id) }}"
                                            class="btn btn-danger"><i class="fas fa-trash-alt inline"></i></a>
                                    </td>
                                @endcan





                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Nº</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            @can('admin.users.rol')
                                <th>Roles</th>
                            @endcan
                            @can('admin.users.rol')
                                <th>Asignar rol </th>
                            @endcan

                            @can('admin.users.edit')
                                <th class="text-info">Edicion</th>
                            @endcan

                            @can('admin.users.destroy')
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
        $('#users').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            responsive: true,
            autoWidth: false,
        });
    </script>

@stop
