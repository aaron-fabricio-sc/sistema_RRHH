<div class="card p-3">
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
                    <th colspan="1">Acciones</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>

                        <th>{{ $contract->type_contract }}</th>
                        <th>{{ $contract->description }}</th>
                        <th>
                            <b class="text-danger">Inactivo</b>

                        <th>


                            <a href="{{ route('admin.contracts.activate', $contract->id) }}"
                                class="btn btn-info">Reestablecer</a>
                        </th>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
