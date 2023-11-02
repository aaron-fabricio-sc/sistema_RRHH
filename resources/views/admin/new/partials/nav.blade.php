<div class="d-flex w-100 justify-evenly mb-2">
    @can('news.create')
        <div class="w-50">
            <a class="btn btn-success my-2" href="{{ route('news.create') }}"> <i class="fas fa-plus"><span class="ml-1">Crear
                        noticia</span></i></a>
        </div>
    @endcan

    @can('news.create')
        <div class="w-50">
            <a class="btn btn-primary my-2" href="{{ route('news.index') }}"><i class="fas fa-list-alt"><span
                        class="ml-1">Lista de noticias</span></i></a>
        </div>
    @endcan


    @can('news.inactive')
        <div class="w-50">
            <a class="btn btn-danger my-2" href="{{ route('news.inactive') }}"><i class="fas fa-times-circle"><span
                        class="ml-1">Noticias inactivas</span></i></a>
        </div>
    @endcan


</div>
