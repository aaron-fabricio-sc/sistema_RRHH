@extends('adminlte::page')

@section('title', 'Empleado' . $employee->name)

@section('content_header')
    <h1>Administrador de los empleados.</h1>
@stop

@section('content')
    <h4 class="title_view">Detalles del empleado {{ $employee->name }}</h4>
    <div class="card fondo">
        <div class="overley ">
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
            @include('admin.employee.partials.nav')
            <div class="container pt-3">
                <div class="row">
                    <div class="col-md-2">
                        <img src="/imagenes/{{ $employee->image }}" alt="{{ $employee->name }}"
                            class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-2 align-items-center">
                        <h5 class="title-show-employee">Nombre: <p class="text-md text-show-employee text-white">
                                {{ $employee->name }}
                            </p>
                        </h5>
                    </div>
                    <div class="col-md-3">
                        <h5 class="title-show-employee">Primer Apellido: <p class="text-md text-show-employee text-white">
                                {{ $employee->firts_last_name }}</p>
                        </h5>


                    </div>
                    <div class="col-md-3">
                        <h5 class="title-show-employee">Segundo Apellido: <p class="text-md text-show-employee text-white">
                                {{ $employee->second_last_name }}</p>
                        </h5>


                    </div>
                    <div class="col-md-2">
                        <h5 class="title-show-employee">Genero: <p class="text-md text-show-employee ">
                                {{ $employee->gender }}</p>
                        </h5>


                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2 p-2 justify-items-center">
                        <h5 class="title-show-employee">Correo: <p class="text-md text-show-employee">
                                {{ $employee->email }}</p>
                        </h5>


                    </div>
                    <div class="col-md-2 p-2 justify-items-center">
                        <h5 class="title-show-employee">Telefono: <p class="text-md text-show-employee">
                                {{ $employee->phone }}</p>
                        </h5>


                    </div>


                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Fecha de nacimiento: <p class="text-md text-show-employee">
                                {{ $employee->birthdate }}</p>
                        </h5>


                    </div>
                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Tipo de documento: <p class="text-md text-show-employee">
                                {{ $employee->type_document }}</p>
                        </h5>


                    </div>
                    <div class="col-md-2">

                        <h5 class="title-show-employee">Nº de documento <p class="text-md text-show-employee">
                                {{ $employee->document_number }}
                                {{ $employee->document_complement }}
                                {{ $employee->ciextension->extension }}</p>
                        </h5>


                    </div>

                </div>

                <div class="row">
                    <div class="col-md-2 p-2 justify-items-center">
                        <h5 class="title-show-employee">Departamento: <p class="text-md text-show-employee">
                                {{ $employee->department->name }}</p>
                        </h5>


                    </div>
                    <div class="col-md-2 p-2 justify-items-center">
                        <h5 class="title-show-employee">Trabajo: <p class="text-md text-show-employee">
                                {{ $employee->job->name }}</p>
                        </h5>


                    </div>


                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Tipo de contrato: <p class="text-md text-show-employee">
                                {{ $employee->contract->type_contract }}</p>
                        </h5>


                    </div>
                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Fecha de inicio: <p class="text-md text-show-employee">
                                {{ $employee->start_date }}</p>
                        </h5>


                    </div>
                    <div class="col-md-2">

                        <h5 class="title-show-employee">Fecha de salida:

                            @if (!$employee->final_date)
                                <p class="text-md text-show-employee ">Sigue activo en la empresa</p>
                            @else
                                <p class="text-md text-show-employee">{{ $employee->final_date }}</p>
                            @endif


                        </h5>


                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 p-2 justify-items-center">
                        <h5 class="title-show-employee">Detalles adicionales del empleado:

                            @if (!$employee->additional_employee_details)
                                <p class="text-md text-show-employee">Dato Vacio</p>
                            @else
                                <p class="text-md text-show-employee">
                                    {{ $employee->additional_employee_details }}</p>
                            @endif
                        </h5>


                    </div>
                    <div class="col-md-2 p-2 justify-items-center">
                        <h5 class="title-show-employee">Detalles de trabajos anteriores:
                            @if (!$employee->previous_work_details)
                                <p class="text-md text-show-employee ">Dato Vacio</p>
                            @else
                                <p class="text-md text-show-employee">
                                    {{ $employee->previous_work_details }}</p>
                            @endif

                        </h5>


                    </div>


                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Dirección 1: <p class="text-md text-show-employee">
                                {{ $employee->address_1 }}</p>
                        </h5>


                    </div>
                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Dirección 2:

                            @if (!$employee->address_2)
                                <p class="text-md text-show-employee">
                                    Vacio</p>
                            @else
                                <p class="text-md text-show-employee">
                                    {{ $employee->address_2 }}</p>
                            @endif

                        </h5>


                    </div>

                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Tiempo de trabajo:

                            @if (!$employee->working_time)
                                <p class="text-md text-show-employee">
                                    {{ $messageError }}</p>
                            @else
                                <p class="text-md text-show-employee">



                                    {{ $dateee }}</p>
                            @endif

                        </h5>


                    </div>
                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Vacaciones tomadas:

                            @if ($employee->take_vacation === null)
                                <p class="text-md text-show-employee">
                                    No</p>
                            @elseif($employee->take_vacation == 0)
                                <p class="text-md text-show-employee">
                                    No</p>
                            @else
                                <p class="text-md text-show-employee">
                                    Si</p>
                            @endif

                        </h5>


                    </div>
                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Días de vacaciones permitidas:

                            @if ($employee->days_vacations === null)
                                <p class="text-md text-show-employee">
                                    Vacio</p>
                            @else
                                <p class="text-md text-show-employee">
                                    {{ $employee->days_vacations }}</p>
                            @endif

                        </h5>


                    </div>
                    <div class="col-md-3 p-2 justify-items-center">
                        <h5 class="title-show-employee">Ultimas vacaciones tomadas:

                            @if ($employee->vacation_start_date !== null && $employee->vacation_final_date !== null)
                                <p class="text-md text-show-employee">
                                    Desde: {{ $employee->vacation_start_date }} Hasta:
                                    {{ $employee->vacation_final_date }}</p>
                            @else
                                <p class="text-md text-show-employee">
                                    El trabajador no tomo vacaciones.</p>
                            @endif

                        </h5>


                    </div>
                    <div class="col-md-2">

                        <h5 class="title-show-employee">Usuario:

                            @if (!$employee->user)
                                <p class="text-md text-show-employee ">No tiene asignado un usuario.</p>
                            @else
                                <p class="text-md text-show-employee">{{ $employee->user->name }}</p>
                            @endif


                        </h5>


                    </div>
                </div>

                <div>
                    @if ($employee->cv !== null)
                        <a href="/archivos/{{ $employee->cv }}" target="blank_" class="btn btn-secondary mx-1">PDF</a>
                    @endif



                    <a href="{{ route('admin.employees.edit', $employee) }}" class="btn btn-primary mx-1">Editar</a>

                    @can('admin.employees.viewConfirmDelete')
                        <a href="{{ route('admin.employees.viewConfirmDelete', $employee) }}"
                            class="btn btn-danger mx-1">Eliminar</a>
                    @endcan


                    @can('admin.employees.viewAssignUser')
                        <a href="{{ route('admin.employees.viewAssignUser', $employee) }}"
                            class="btn btn-warning mx-1">Assignar
                            Usuario</a>
                    @endcan

                    @can('admin.employees.viewAssignUser')
                        <a target="blank_" href="{{ route('admin.employees.viewPfdEmployee', $employee) }}"
                            class="btn btn-warning mx-1">Descargar Perfil</a>
                    @endcan

                    @can('admin.employees.viewAssignUser')
                        <a target="blank_" href="{{ route('admin.employees.viewVacations', $employee) }}"
                            class="btn btn-warning mx-1">Vacaciones</a>
                    @endcan


                </div>

            </div>
        </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    @stop

    @section('js')

    @stop
