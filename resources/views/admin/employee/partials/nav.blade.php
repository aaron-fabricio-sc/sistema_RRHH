<div class="d-flex w-100 justify-evenly ">
    @can('admin.employees.edit')
        <div class="w-50">
            <a class="btn btn-success my-2" href="{{ route('admin.employees.create') }}"> <i class="fas fa-plus"><span
                        class="ml-1">Crear un nuevo
                        empleado</span></i></a>
        </div>
    @endcan

    <div class="w-50">
        <a class="btn btn-primary my-2" href="{{ route('admin.employees.index') }}"><i class="fas fa-list-alt"><span
                    class="ml-1">Lista de Empleados</span></i></a>
    </div>
    @can('admin.employees.inactive')
        <div class="w-50">
            <a class="btn btn-danger my-2" href="{{ route('admin.employees.inactive') }}"><i class="fas fa-user-times"><span
                        class="ml-1">Empleados inactivos</span></i></a>
        </div>
    @endcan


</div>
