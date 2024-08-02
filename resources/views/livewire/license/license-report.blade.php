<div>
    <input wire:model="search" type="text" placeholder="Ingresa el numero de documuento"
        class="form-control w-50 mb-2 shadow-2xl" name="buscador">


    @if (!$employees)
        <h5 class="text-danger">{{ $vacio }}</h5>
    @else
        @foreach ($employees as $employee)
            <h2 class="textarea w-50">{{ $employee->name }} {{ $employee->firts_last_name }}
                {{ $employee->second_last_name }}</h2>

            {!! Form::hidden('employee_id', $employee->id, [null]) !!}
        @endforeach





        @if (count($employees) === 1)
        @else
            <small>Empleado no valido</small>
        @endif




    @endif

</div>
