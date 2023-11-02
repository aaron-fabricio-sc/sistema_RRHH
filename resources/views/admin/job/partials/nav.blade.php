 <div class="d-flex w-100 justify-content-between mb-3">
     @can('admin.jobs.create')
         <div class="">
             <a class="btn btn-success btn-sm" href="{{ route('admin.jobs.create') }}"><i class="fas fa-plus"><span
                         class="ml-1">Crear un nuevo
                         trabajo</span></i></a>
         </div>
     @endcan

     @can('admin.jobs.index')
         <div class="">
             <a class="btn btn-primary btn-sm" href="{{ route('admin.jobs.index') }}"><i class="fas fa-list-alt"><span
                         class="ml-1">Lista de trabajos activos</span></i></a>
         </div>
     @endcan


     @can('admin.jobs.inactive')
         <div class="">
             <a class="btn btn-danger btn-sm" href="{{ route('admin.jobs.inactive') }}"><i class="fas fa-times-circle"><span
                         class="ml-1">Trabajos
                         inactivos</span></i></a>
         </div>
     @endcan
     @can('admin.jobs.pdf.list')
         <div class="">
             <a class="btn btn-info btn-sm" target="_blank" href="{{ route('admin.jobs.pdf.list') }}"><i
                     class="fas fa-file"><span class="ml-1">Generar reporte</span></i></a>
         </div>
     @endcan

 </div>
