<div class="d-flex w-100 justify-content-between flex-wrap mb-2">
    @can('attendances.index')
        <div class="">
            <a class="btn btn-success btn-sm my-2" href="{{ route('attendances.index') }}"> <i class="fas fa-list-alt"><span
                        class="ml-1">Lista</span></i></a>
        </div>
    @endcan
    @can('attendaces.pdf.list')
        <div class="">
            <a class="btn btn-info btn-sm my-2" href="{{ route('attendances.reports') }}"> <i class="fas fa-file"><span
                        class="ml-1">Generar Reporte</span></i></a>
        </div>
    @endcan


</div>
