<div class="card p-3">
    @if (session('message'))
        <div class="alert alert-success">
            <strong>{{ session('message') }}</strong>
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
                    <th colspan="1">Acciones</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>

                        <th>{{ $job->name }}</th>
                        <th>{{ $job->description }}</th>
                        @if (!$job->departament)
                            <td class="text-danger">
                                <small>Dato Eliminado, asígnele un nuevo departamento..</small>
                            </td>
                        @else
                            <td>{{ $job->departament->name }}</td>
                        @endif

                        <th>
                            <b class="text-danger">Inactivo</b>
                        </th>

                        <th>


                            <a href="{{ route('admin.jobs.activate', $job) }}" class="btn btn-info">Reestablecer</a>
                        </th>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
