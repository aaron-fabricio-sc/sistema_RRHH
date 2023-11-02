      <div class="form-group">
          {!! Form::label('type_contract', 'Nombre: ') !!}
          {!! Form::text('type_contract', null, [
              'class' => 'form-control w-50',
              'placeholder' => 'ingrese el tipo de contrato',
          ]) !!}

          @error('type_contract')
              <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>


      <div class="form-group">
          {!! Form::label('description', 'Descripción: ') !!}
          {!! Form::textarea('description', null, [
              'class' => 'textarea w-50',
              'placeholder' => 'ingrese una descripción',
          ]) !!}
          @error('description')
              <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>
