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
        <label for="buscador" class="text-bold"> Buscar por nombre </label>
        <input wire:model="search" type="text" placeholder="Ingresa un nombre" class="form-control  shadow-2xl"
            style="border-bottom: 2px solid black" name="buscador">

    </div>


    <div class="card-blue">

        @include('admin.department.partials.nav')
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Descripción</th>
                    @can('admin.departments.edit')
                        <th>Estado</th>
                    @endcan
                    @can('admin.departments.edit')
                        <th colspan="3">Acciones</th>
                    @endcan


                </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                    <tr>

                        <td>{{ $department->name }}</td>
                        <td>{{ $department->description }}</td>
                        @can('admin.departments.edit')
                            <td>
                                <b class="text-success">Activo</b>
                            </td>
                        @endcan


                        @can('admin.departments.edit')
                            <td><a class="btn btn-info" href="{{ route('admin.departments.edit', $department) }}"><i
                                        class="fas fa-edit"><span class="ml-1">Editar</span></i></a>
                            </td>
                        @endcan
                        @can('admin.departments.viewConfirmDelete')
                            <td>
                                <a href="{{ route('admin.departments.viewConfirmDelete', $department->id) }}"
                                    class="btn btn-danger"> <i class="fas fa-trash-alt"><span
                                            class="ml-1">Eliminar</span></i> </a>
                            </td>
                        @endcan


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
