@extends('adminlte::page')

@section('title', 'Contractos')

@section('content_header')
    <h1>Administrador de tipos de contratos.</h1>
@stop

@section('content')
    <h4 class="text-info ">Lista de los Contratos</h4>
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


                @include('admin.contract.partials.nav')


                <table class="table table-striped" id="contracts">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Tipo de contrato</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            @can('admin.contracts.edit')
                                <th class="text-info">Editar</th>
                            @endcan

                            @can('admin.contracts.viewConfirmDelete')
                                <th class="text-danger">Eliminar</th>
                            @endcan


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contracts as $contract)
                            <tr>
                                <td> {{ $loop->index + 1 }}</td>
                                <td>{{ $contract->type_contract }}</td>
                                <td>{{ $contract->description }}</td>
                                <td>
                                    <b class="text-success">Activo</b>
                                </td>
                                @can('admin.contracts.edit')
                                    <td><a class="btn btn-info " href="{{ route('admin.contracts.edit', $contract) }}"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
                                @endcan



                                @can('admin.contracts.viewConfirmDelete')
                                    <td>
                                        <a href="{{ route('admin.contracts.viewConfirmDelete', $contract->id) }}"
                                            class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>
                                    </td>
                                @endcan


                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Nº</th>
                            <th>Tipo de contrato</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            @can('admin.contracts.edit')
                                <th>Editar</th>
                            @endcan
                            @can('admin.contracts.viewConfirmDelete')
                                <th>Eliminar</th>
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
        $('#contracts').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            responsive: true,
            autoWidth: false,
        });
    </script>
@stop
