 <div class="d-flex w-100 justify-content-between  flex-wrap  mb-3">
     @can('admin.licenses.create')
         <div>
             <a class="btn btn-success " href="{{ route('admin.licenses.create') }}"><i class="fas fa-plus"><span
                         class="ml-1">Crear una nueva licencia</span></i></a>
         </div>
     @endcan

     @can('admin.licenses.index')
         <div>
             <a class="btn btn-primary " href="{{ route('admin.licenses.index') }}"><i class="fas fa-list-alt"><span
                         class="ml-1">Lista de licencias</span></i></a>
         </div>
     @endcan


     @can('admin.licenses.inactive')
         <div>
             <a class="btn btn-danger " href="{{ route('admin.licenses.inactive') }}"><i class="fas fa-times-circle"><span
                         class="ml-1">Licencias inactivas</span></i></a>
         </div>
     @endcan

     @can('admin.licenses.inactive')
         <div>
             <a class="btn btn-info " href="{{ route('admin.licenses.inactive') }}"><i class="fas fa-file"><span
                         class="ml-1">Generar Reporte</span></i></a>
         </div>
     @endcan


 </div>
