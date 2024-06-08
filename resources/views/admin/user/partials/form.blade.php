     <div class="form-group">
         {!! Form::label('name', 'Nombre: ') !!}
         {!! Form::text('name', null, [
             'class' => 'form-control w-50',
             'placeholder' => 'ingrese el nombre del departamento',
         ]) !!}

         @error('name')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>

     <div class="form-group">
         {!! Form::label('email', 'Email: ') !!}
         {!! Form::text('email', null, [
             'class' => 'form-control w-50',
             'placeholder' => 'ingrese un correo',
         ]) !!}
         @error('email')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>

     <div class="form-group">



         {!! Form::label('password', 'Contraseña: ') !!}
         {!! Form::password('password', [
             'class' => 'form-control w-50',
             'placeholder' => 'Ingrese una contraseña',
         ]) !!}
         @error('password')
             <span class="text-danger">{{ $message }}</span>
         @enderror
     </div>
