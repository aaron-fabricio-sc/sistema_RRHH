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
    <div class="form-group  w-50">
        <label for="buscador" class="text-bold"> Buscar por nombre ci o apellido</label>
        <input wire:model="search" type="text" placeholder="Ingresa un nombre apellido o ci"
            class="form-control  shadow-2xl" style="border-bottom: 2px solid black" name="buscador">

    </div>
    <div class="card-blue">
        @include('admin.employee.partials.nav')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Departamento </th>
                    <th>Trabajo</th>
                    <th>Estado</th>
                    <th>Curriculum</th>
                    <th colspan="3">Acciones</th>
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
                        @if (!$employee->job)
                            <td><small class="text-danger">Vacio</small></td>
                        @else
                            <td>{{ $employee->job->name }}</td>
                        @endif
                        <td>
                            <b class="text-success">Activo</b>
                        </td>
                        <td>
                            <a href="/archivos/{{ $employee->cv }}" target="_blank" class="btn btn-secondary btn-sm"><i
                                    class="fas fa-print"><span class="ml-1">Ver_CV</span></i></a>
                        </td>
                        @can('admin.employees.edit')
                            <td><a class="btn btn-info btn-sm" href="{{ route('admin.employees.edit', $employee) }}"><i
                                        class="fas fa-edit"><span class="ml-1">Editar</span></i></a>
                            </td>
                        @endcan
                        @can('admin.employees.viewConfirmDelete')
                            <td>
                                <a href="{{ route('admin.employees.viewConfirmDelete', $employee->id) }}"
                                    class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"><span
                                            class="ml-1">Eliminar</span></i> </a>
                            </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
