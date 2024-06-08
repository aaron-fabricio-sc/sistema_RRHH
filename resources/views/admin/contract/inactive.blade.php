@extends('adminlte::page')

@section('title', 'Contractos Inactivos')

@section('content_header')
    <h1>Administrador de tipos de contratos.</h1>
@stop

@section('content')
    <h4 class="text-danger">Contratos Inactivos</h4>
    <div class="card fondo">
        <div class="overley">
            <div class="card-blue">


                @include('admin.contract.partials.nav')


                <table class="table table-striped" id="contracts">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Tipo de contrato</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th class="text-success">Reestablecer</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contracts as $contract)
                            <tr>
                                <th>{{ $loop->index + 1 }}</th>
                                <th>{{ $contract->type_contract }}</th>
                                <th>{{ $contract->description }}</th>
                                <th>
                                    <b class="text-danger">Inactivo</b>

                                <th>


                                    <a href="{{ route('admin.contracts.activate', $contract->id) }}" class="btn btn-info"><i
                                            class="fas fa-clipboard-check"></i></a>
                                </th>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nº</th>
                            <th>Tipo de contrato</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th class="text-success">Reestablecer</th>


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
