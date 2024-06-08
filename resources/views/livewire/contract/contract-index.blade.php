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
        <input wire:model="search" type="text" placeholder="Ingresa el tipo de contrato" class="form-control  shadow-2xl"
            style="border-bottom: 2px solid black" name="buscador">

    </div>


    <div class="card-blue">


        @include('admin.contract.partials.nav')


        <table class="table table-striped">
            <thead>
                <tr>

                    <th>Tipo de contrato</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th colspan="3">Acciones</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>

                        <th>{{ $contract->type_contract }}</th>
                        <th>{{ $contract->description }}</th>
                        <th>
                            <b class="text-success">Activo</b>
                        </th>
                        <th><a class="btn btn-info" href="{{ route('admin.contracts.edit', $contract) }}">Editar</a>
                        </th>


                        @can('admin.contracts.viewConfirmDelete')
                            <th>
                                <a href="{{ route('admin.contracts.viewConfirmDelete', $contract->id) }}"
                                    class="btn btn-danger">Eliminar</a>
                            </th>
                        @endcan


                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
