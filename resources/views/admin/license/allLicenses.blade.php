@extends('adminlte::page')

@section('title', 'Licencias')

@section('content_header')
    <h1>Administrador de todas las licencias</h1>
@stop

@section('content')



    <h4 class="text-info">ADMINISTRADOR DE TODAS LAS LICENCIAS</h4>
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
                @include('admin.license.partials.nav')
                <table class="table table-striped" id="license">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Empleado</th>
                            <th>Tipo de licencia</th>
                            <th>Detalles de licencia</th>

                            <th class="text-success">Fecha de_empiezo</th>
                            <th class="text-danger">Fecha_final</th>

                            <th class="text-info">Estado</th>



                            @can('admin.licenses.viewConfirmDelete')
                                <th class="text-danger">Eliminar</th>
                            @endcan
                            @can('admin.licenses.viewConfirmDelete')
                                <th class="text-danger">Aceptar</th>
                            @endcan
                            @can('admin.licenses.viewConfirmDelete')
                                <th class="text-danger">Rechazar</th>
                            @endcan


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allLicenses as $license)
                            <tr>
                                <td class="text-success">{{ $loop->index + 1 }}</td>


                                @php
                                    $employee = DB::table('employees')
                                        ->where('id', $license->employee_id)
                                        ->first();
                                @endphp

                                @php
                                    $licenseDB = DB::table('licenses')
                                        ->where('id', $license->license_id)
                                        ->first();
                                @endphp


                                @php
                                    $dateI = $license->start_date;

                                    $newDateInitial = date('d-m-Y', strtotime($dateI));

                                    $dateF = $license->final_date;

                                    $newDateFinal = date('d-m-Y', strtotime($dateF));

                                @endphp

                                <td>{{ $employee->name }}</td>
                                <td>{{ $licenseDB->type_license }}</td>
                                <td>{{ $licenseDB->description }}</td>







                                <td>{{ $newDateInitial }}</td>
                                <td>{{ $newDateFinal }}</td>
                                <td>
                                    @if ($license->status_license === null)
                                        <b class="text-info">Sin revisar</b>
                                    @endif
                                    @if ($license->status_license === 1)
                                        <b class="text-danger">Rechazado</b>
                                    @endif
                                    @if ($license->status_license === 2)
                                        <b class="text-success">Aceptado</b>
                                    @endif


                                </td>


                                @can('admin.licenses.viewConfirmDelete')
                                    <td>
                                        <a href="{{ route('admin.licenses.viewConfirmDelete', $license->id) }}"
                                            class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                @endcan
                                @can('admin.licenses.viewConfirmDelete')
                                    <td>
                                        <a href="{{ route('admin.licenses.confirmLicense', ['data' => base64_encode(json_encode($license))]) }}"
                                            class="btn btn-info"><i class="fas fa-check"></i></a>
                                    </td>
                                @endcan
                                @can('admin.licenses.viewConfirmDelete')
                                    <td>
                                        <a href="{{ route('admin.licenses.refuseLicense', ['data' => base64_encode(json_encode($license))]) }}"
                                            class="btn btn-danger"><i class="fas fa-times"></i></a>
                                    </td>
                                @endcan




                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>Nº</th>
                            <th>Empleado</th>

                            <th>Tipo de Licencia</th>
                            <th>Descripción</th>

                            <th class="text-success">Fecha de empiezo</th>
                            <th class="text-danger">Fecha final</th>

                            <th class="text-info">Estado</th>



                            @can('admin.licenses.viewConfirmDelete')
                                <th class="text-danger">Eliminar</th>
                            @endcan

                            @can('admin.licenses.viewConfirmDelete')
                                <th class="text-danger">Aceptar</th>
                            @endcan
                            @can('admin.licenses.viewConfirmDelete')
                                <th class="text-danger">Rechazar</th>
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
        $('#license').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            responsive: true,
            autoWidth: false,
        });
    </script>
@stop
