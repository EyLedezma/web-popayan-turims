


<div class="box box-info padding-1">
    <div class="box-body">
    


        <div class="hidden"  class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $lugar->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $lugar->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::text('horarios', $lugar->horarios, ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $lugar->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada"  height="80">
            {{ Form::label('foto_url' )  }}
            {{ Form::file( 'foto_url',$lugar->foto_url,['class' => 'form-control' . ($errors->has('foto_url') ? ' is-invalid' : ''), 'placeholder' => 'sellecione una foto para la vista previa ']) }}
            {!! $errors->first('foto_url', '<div class="invalid-feedback">:message</div>')  !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipolugar_id') }}
            {{ Form::select('tipolugar_id',$tipolugar, $lugar->tipolugar_id, ['class' => 'form-control' . ($errors->has('tipolugar_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipolugar (Clik para desplegar)']) }}
            {!! $errors->first('tipolugar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutas_id') }}
            {{ Form::select('rutas_id' ,$ruta, $lugar->rutas_id, ['class' => 'form-control' . ($errors->has('rutas_id') ? ' is-invalid' : ''), 'placeholder' => 'Rutas Id']) }}
            {!! $errors->first('rutas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gastronomia_id') }}
            {{ Form::select('gastronomia_id',$gastronomia ,$lugar->gastronomia_id, ['class' => 'form-control' . ($errors->has('gastronomia_id') ? ' is-invalid' : ''), 'placeholder' => 'Gastronomia Id']) }}
            {!! $errors->first('gastronomia_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('evento_id') }}
            {{ Form::select('evento_id',$evento, $lugar->evento_id, ['class' => 'form-control' . ($errors->has('evento_id') ? ' is-invalid' : ''), 'placeholder' => 'Evento Id']) }}
            {!! $errors->first('evento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calificasiones_id') }}
            {{ Form::select('calificasiones_id',$calificasiones, $lugar->calificasiones_id, ['class' => 'form-control' . ($errors->has('calificasiones_id') ? ' is-invalid' : ''), 'placeholder' => 'Calificasiones Id']) }}
            {!! $errors->first('calificasiones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicios_id') }}
            {{ Form::select('servicios_id',$servicio ,$lugar->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>