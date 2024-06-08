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
        @include('admin.job.partials.nav')
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Departamento</th>

                    <th>Estado</th>
                    <th colspan="3">Acciones</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>

                        <td>{{ $job->name }}</td>
                        <td>{{ $job->description }}</td>
                        @if (!$job->departament)
                            <td class="text-danger">
                                <small>Dato Eliminado, asígnele un nuevo departamento..</small>
                            </td>
                        @else
                            <td>{{ $job->departament->name }}</td>
                        @endif

                        <td>
                            <b class="text-success">Activo</b>
                        </td>


                        @can('admin.jobs.edit')
                            <td><a class="btn btn-info" href="{{ route('admin.jobs.edit', $job) }}">Editar</a>
                            </td>
                        @endcan


                        @can('admin.jobs.viewConfirmDelete')
                            <td>


                                <a href="{{ route('admin.jobs.viewConfirmDelete', $job->id) }}"
                                    class="btn btn-danger">Eliminar</a>
                            </td>
                        @endcan


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
