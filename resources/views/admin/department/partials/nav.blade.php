<div class="d-flex w-100 justify-content-between flex-wrap mb-2">
    @can('admin.departments.edit')
        <div class="">
            <a class="btn btn-success btn-sm my-2" href="{{ route('admin.departments.create') }}"> <i class="fas fa-plus"><span
                        class="ml-1">Crear un nuevo
                        departamento</span></i></a>
        </div>
    @endcan

    <div class="">
        <a class="btn btn-primary btn-sm my-2" href="{{ route('admin.departments.index') }}"><i
                class="fas fa-list-alt"><span class="ml-1">Lista de Departamentos</span></i></a>
    </div>
    @can('admin.departments.inactive')
        <div class="">
            <a class="btn btn-danger btn-sm my-2" href="{{ route('admin.departments.inactive') }}"><i
                    class="fas fa-times-circle"><span class="ml-1">Departamentos inactivos</span></i></a>
        </div>
    @endcan
    @can('admin.departments.pdf.list')
        <div class="">
            <a class="btn btn-info btn-sm my-2" target="_blank" href="{{ route('admin.departments.pdf.list') }}"><i
                    class="fas fa-file"><span class="ml-1">Generar reporte</span></i></a>
        </div>
    @endcan

</div>
