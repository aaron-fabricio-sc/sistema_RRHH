      <div class="form-group">
          {!! Form::label('type_license', 'Tipo de licencia: ') !!}
          {!! Form::text('type_license', null, [
              'class' => 'form-control w-50',
              'placeholder' => 'ingrese el tipo de contrato',
          ]) !!}

          @error('type_license')
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
