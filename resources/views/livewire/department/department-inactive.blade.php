<div class="card p-3">
    <div class="form-group ">
        <label for="buscador" class="text-bold"> Buscar por nombre </label>
        <input wire:model="search" class="form-control w-50 " type="text" name="buscador" id=""
            placeholder="Ingrese un nombre">
    </div>
    <div class="card-blue">
        <div class="card-blue">
            @include('admin.department.partials.nav')
            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th colspan="1">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr>

                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td>
                            <td>
                                <b class="text-danger">Inactivo</b>
                            </td>
                            <td>
                                <a class="btn btn-info"
                                    href="{{ route('admin.departments.activate', $department) }}">Reestablecer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
