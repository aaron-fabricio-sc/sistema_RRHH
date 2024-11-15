      <div class="form-group">
          {!! Form::label('title', 'Titulo: ') !!}
          {!! Form::text('title', null, [
              'class' => 'form-control w-50',
              'placeholder' => 'ingrese el tipo de contrato',
          ]) !!}

          @error('title')
              <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>


      {{--   <div class="form-group" id="textoPlugin">
          {!! Form::label('body', 'Descripción: ') !!}
          {!! Form::textarea('body', null, [
              'class' => 'textoPlugin',
              'placeholder' => 'ingrese una descripción',
          ]) !!}
          @error('body')
              <span class="text-danger">{{ $message }}</span>
          @enderror
      </div> --}}

      <div class="form-group">
          {!! Form::label('body', 'Descripción: ') !!}
          {!! Form::textarea('body', null, [
              'class' => 'textarea w-50',
              'placeholder' => 'ingrese una descripción',
          ]) !!}
          @error('body')
              <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>

      <div>
          {!! Form::label('user_id', 'Creador de la noticia: ') !!}
          {!! Form::hidden('user_id', $user->id, [null]) !!}
          <p class="textarea w-50">{{ $user->name }}</p>

          @error('user_id')
              <span class="text-danger">{{ $message }}</span>
          @enderror

      </div>
