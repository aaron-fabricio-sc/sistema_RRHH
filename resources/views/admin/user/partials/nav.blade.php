 <div class="d-flex w-100 justify-content-between flex-wrap mb-3     ">
     @can('admin.users.create')
         <div>
             <a class="btn btn-success btn-sm " href="{{ route('admin.users.create') }}"><i class="fas fa-plus"><span
                         class="ml-1">Crear un nuevo
                         Usuario</span></i></a>
         </div>
     @endcan

     <div>
         <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}"><i class="fas fa-list-alt"><span
                     class="ml-1">Lista de Empleados</span></i></a>
     </div>

     <div>
         <a class="btn btn-info btn-sm" target="_blank" href="{{ route('admin.users.pdf.list') }}"><i
                 class="fas fa-file"><span class="ml-1">Gererar reporte</span></i></a>
     </div>


 </div>
