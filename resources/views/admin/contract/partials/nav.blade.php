  <div class="d-flex w-100 justify-content-between mb-3">
      @can('admin.contracts.create')
          <div class="">
              <a class="btn btn-success" href="{{ route('admin.contracts.create') }}"><i class="fas fa-plus"><span
                          class="ml-1">Crear un nuevo
                          contrato</span></i></a>
          </div>
      @endcan
      @can('admin.contracts.index')
          <div class="">
              <a class="btn btn-primary" href="{{ route('admin.contracts.index') }}"><i class="fas fa-list-alt"><span
                          class="ml-1">Lista de contratos</span></i></a>
          </div>
      @endcan
      @can('admin.contracts.inactive')
          <div class="">
              <a class="btn btn-danger" href="{{ route('admin.contracts.inactive') }}"><i class="fas fa-times-circle"><span
                          class="ml-1">Contratos inactivos</span></i></a>
          </div>
      @endcan

      @can('admin.contracts.pdf.list')
          <div class="">
              <a class="btn btn-info" target="_blank" href="{{ route('admin.contracts.pdf.list') }}"><i
                      class="fas fa-file"><span class="ml-1">Generar Reporte</span></i></a>
          </div>
      @endcan


  </div>
