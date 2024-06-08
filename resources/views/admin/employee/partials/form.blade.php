   <div class="form-group m-2">
       {!! Form::label('name', 'Nombre:* ') !!}
       {!! Form::text('name', null, [
           'class' => 'form-control ',
           'placeholder' => 'ingrese el nombre del departamento',
       ]) !!}

       @error('name')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('firts_last_name', 'Primer apellido:* ') !!}
       {!! Form::text('firts_last_name', null, [
           'class' => 'form-control',
           'placeholder' => 'ingrese el primer apellido.',
       ]) !!}

       @error('firts_last_name')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('second_last_name', 'Segundo apellido: ') !!}
       {!! Form::text('second_last_name', null, [
           'class' => 'form-control',
           'placeholder' => 'ingrese el segundo apellido',
       ]) !!}

       @error('second_last_name')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('birthdate', 'Fecha de nacimiento:* ') !!}
       {!! Form::date('birthdate', null, [
           'class' => 'textarea w-100',
       ]) !!}

       @error('cv')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('image', 'Adjunte una imagen: ') !!}
       {!! Form::file('image', null, [
           'class' => 'form-control',
           'placeholder' => 'ingrese el segundo apellido',
       ]) !!}

       @error('image')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('cv', 'Adjunte un Cv: ') !!}
       {!! Form::file('cv', null, [
           'class' => 'form-control',
           'placeholder' => 'ingrese el segundo apellido',
       ]) !!}

       @error('cv')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>


   <div class="form-group m-2">
       {!! Form::label('gender', 'Ingrese un genero:* ') !!}

       {!! Form::select('gender', $gender, null, [
           'class' => 'textarea w-100',
       ]) !!}



       @error('gender')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('phone', 'Número de celular:* ') !!}
       {!! Form::text('phone', null, [
           'class' => 'form-control',
           'placeholder' => 'Ingrese un número de celular',
       ]) !!}

       @error('phone')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('email', 'Correo electronico:* ') !!}
       {!! Form::text('email', null, [
           'class' => 'form-control',
           'placeholder' => 'Ingrese el correo electronico',
       ]) !!}

       @error('email')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('type_document', 'Tipo de documento:* ') !!}

       {!! Form::select('type_document', $type_documents, null, [
           'class' => 'textarea w-100',
       ]) !!}



       @error('type_document')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('document_number', 'Número de documento:* ') !!}
       {!! Form::text('document_number', null, [
           'class' => 'form-control',
           'placeholder' => 'Ingrese el número del documento',
       ]) !!}

       @error('document_number')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>


   <div class="form-group m-2">
       {!! Form::label('ci_extension_id', 'Extención del documento:* ') !!}

       {!! Form::select('ci_extension_id', $ci_extensions, null, [
           'class' => 'textarea w-100',
       ]) !!}



       @error('ci_extension_id')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('document_complement', 'Complemento del documento: ') !!}
       {!! Form::text('document_complement', null, [
           'class' => 'form-control',
           'placeholder' => 'Ingrese el complemento del documento',
       ]) !!}

       @error('document_complement')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('address_1', 'Dirección 1: ') !!}
       {!! Form::text('address_1', null, [
           'class' => 'form-control',
           'placeholder' => 'Ingrese una dirección',
       ]) !!}
       @error('address_1')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('address_2', 'Dirección 2: ') !!}
       {!! Form::text('address_2', null, [
           'class' => 'form-control',
           'placeholder' => 'Ingrese una dirección',
       ]) !!}
       @error('address_2')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>
   <div class="form-group m-2">
       {!! Form::label('start_date', 'Fecha de inicio:* ') !!}
       {!! Form::date('start_date', null, [
           'class' => 'textarea w-100',
       ]) !!}
       @error('start_date')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('previous_work_details', 'Información del antiguo trabajo: ') !!}
       {!! Form::textarea('previous_work_details', null, [
           'class' => 'textarea w-100',
           'placeholder' => 'Ingrese una descripción',
       ]) !!}
       @error('previous_work_details')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('additional_employee_details', 'Detalles adicionles del empleado: ') !!}
       {!! Form::textarea('additional_employee_details', null, [
           'class' => 'textarea w-100',
           'placeholder' => 'Ingrese una dirección',
       ]) !!}
       @error('additional_employee_details')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>







   <div class="form-group m-2">
       {!! Form::label('department_id', 'Departamento de trabajo:* ') !!}


       {!! Form::select('department_id', $depatments, null, ['class' => 'textarea w-100']) !!}


       @error('department_id')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div class="form-group m-2">
       {!! Form::label('contract_id ', 'Tipo de contrato:* ') !!}

       {!! Form::select('contract_id', $contracts, null, [
           'class' => 'textarea w-100',
       ]) !!}



       @error('contract_id')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>


   <div class="form-group m-2">
       {!! Form::label('job_id', 'Nombre del trabajo:* ') !!}

       {!! Form::select('job_id', $jobs, null, [
           'class' => 'textarea w-100',
       ]) !!}



       @error('job_id')
           <span class="text-danger">{{ $message }}</span>
       @enderror
   </div>

   <div></div>
