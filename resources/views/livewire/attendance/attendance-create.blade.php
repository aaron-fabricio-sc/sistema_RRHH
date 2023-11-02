<div>
    <input wire:model="search" type="text" placeholder="Ingresa el numero de documuento" class="form-control  shadow-2xl"
        name="buscador">



    @if (!$employees)
        <h2>{{ $vacio }}</h2>
    @else
        @foreach ($employees as $employee)
            <h2>{{ $employee->name }} {{ $employee->firts_last_name }} {{ $employee->second_last_name }}</h2>
        @endforeach

        <div class="container_formularios">



            {!! Form::open(['route' => 'attendances.store']) !!}

            <div class="form-group">


                @foreach ($employees as $employee)
                    {!! Form::hidden('employee_id', $employee->id, [null]) !!}
                @endforeach





            </div>

            @if (count($employees) === 1)
                <div class="form-group">
                    {!! Form::submit('Entrada', ['class' => 'btn btn-primary entrada']) !!}
                </div>
            @else
                <small>Usuario no valido</small>
            @endif


            {!! Form::close() !!}

            {!! Form::open(['route' => 'attendances.salida']) !!}

            <div class="form-group">


                @foreach ($employees as $employee)
                    {!! Form::hidden('employee_id', $employee->id, [null]) !!}
                @endforeach





            </div>


            @if (count($employees) === 1)
                <div class="">
                    {!! Form::submit('Salida', ['class' => 'btn btn-danger ', 'id' => 'salida']) !!}
                </div>
            @endif


            {!! Form::close() !!}
        </div>






    @endif

</div>
