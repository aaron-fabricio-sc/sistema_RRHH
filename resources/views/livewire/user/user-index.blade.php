<div class="card p-3">

    @if (session('message'))
        <p class="alert alert-success">
            <b>{{ session('message') }}</b>
        </p>
    @endif

    @if (session('danger'))
        <p class="alert alert-danger">
            <b>{{ session('danger') }}</b>
        </p>
    @endif
    <div class="form-group  w-50">
        <label for="buscador" class="text-bold"> Buscar por nombre o correo: </label>
        <input wire:model="search" type="text" placeholder="Ingresa un nombre o el correo"
            class="form-control  shadow-2xl" style="border-bottom: 2px solid black" name="buscador">

    </div>
    <div class="card-blue">


        <div class="d-flex w-100 justify-evenly ">
            @include('admin.user.partials.nav')

        </div>

        @if ($users->count())

            <table class="table table-striped">
                <thead>
                    <tr>

                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Asignar rol </th>
                        <th colspan="2">Acciones</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        @if ($user->id === 1)
                            <?php
                            
                            continue;
                            
                            ?>
                        @endif

                        @can('admin.users.create')
                            <tr>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>

                                <td>
                                    @foreach ($user->roles as $role)
                                        -{{ $role->name }}
                                    @endforeach
                                </td>
                                <td><a class="btn btn-secondary" href="{{ route('admin.users.rol', $user) }}">Asignar
                                        rol</a>
                                </td>
                                <td><a class="btn btn-info" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>

                                <td>
                                    <a href="{{ route('admin.users.viewConfirmDelete', $user->id) }}"
                                        class="btn btn-danger">Eliminar</a>
                                </td>

                            </tr>
                        @endcan
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
