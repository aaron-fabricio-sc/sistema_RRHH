@extends('adminlte::page')

@section('title', 'Lista de asistencias')

@section('content_header')
    <h1>Administrador del área de asistencias</h1>
@stop

@section('content')
    <h4 class="text-info">Lista de todas las asistencias</h4>
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

                @include('attendance.partials.nav')

                <table class="table table-striped" id="attendances">
                    <thead>
                        <tr>

                            <th>Nº</th>

                            <th>Nombre</th>
                            <th>Asistencia</th>
                            <th>Fecha</th>
                            <th class="text-info">Entrada</th>
                            <th class="text-danger">Salida</th>
                            <th>Ver más</th>




                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                            <tr>

                                <td class="">
                                    {{ $attendance->id }}
                                </td>

                                <td>{{ $attendance->employee->name }}</td>



                                @if ($attendance->tipo_asistencia === 'Temprano')
                                    <td class="text-info"> <b>{{ $attendance->tipo_asistencia }}</b> </td>
                                @elseif($attendance->tipo_asistencia === 'Puntual')
                                    <td class="text-success"> <b>{{ $attendance->tipo_asistencia }}</b> </td>
                                @elseif($attendance->tipo_asistencia === 'Tarde')
                                    <td class="text-danger"> <b>{{ $attendance->tipo_asistencia }}</b> </td>
                                @endif



                                @php
                                    $date = $attendance->fecha;

                                    $newDate = date('d-m-Y', strtotime($date));
                                @endphp
                                <td>{{ $newDate }}</td>
                                <td>{{ $attendance->entrada }}</td>
                                <td>{{ $attendance->salida }}</td>

                                <td><a class="btn btn-info"
                                        href="{{ route('attendances.show', $attendance->employee_id) }}"><i
                                            class="fas fa-eye"></i></a></td>







                                {{--           @can('admin.attendances.edit')
                                    <td><a class="btn btn-info" href="{{ route('admin.attendances.edit', $attendance) }}"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
                                @endcan
                                @can('admin.attendances.viewConfirmDelete')
                                    <td>
                                        <a href="{{ route('admin.attendances.viewConfirmDelete', $attendance->id) }}"
                                            class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                                    </td>
                                @endcan --}}


                            </tr>
                        @endforeach
                    </tbody>


                    <tfoot>
                        <tr>


                            <th>Nº</th>

                            <th>Nombre</th>
                            <th>Asistencia</th>
                            <th>Fecha</th>
                            <th class="text-info">Entrada</th>
                            <th class="text-danger">Salida</th>
                            <th>Ver más</th>
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
        $('#attendances').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
            },
            responsive: true,
            autoWidth: false,
        });
    </script>
@stop
