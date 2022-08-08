<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $servicio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $servicio->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicasion') }}
            {{ Form::text('ubicasion', $servicio->ubicasion, ['class' => 'form-control' . ($errors->has('ubicasion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicasion']) }}
            {!! $errors->first('ubicasion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::text('horarios', $servicio->horarios, ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiposervicios_id') }}
            {{ Form::text('tiposervicios_id', $servicio->tiposervicios_id, ['class' => 'form-control' . ($errors->has('tiposervicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Tiposervicios Id']) }}
            {!! $errors->first('tiposervicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>