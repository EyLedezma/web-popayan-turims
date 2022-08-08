<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ubicasion') }}
            {{ Form::text('ubicasion', $ruta->ubicasion, ['class' => 'form-control' . ($errors->has('ubicasion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicasion']) }}
            {!! $errors->first('ubicasion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::text('horarios', $ruta->horarios, ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $ruta->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mapas_id') }}
            {{ Form::text('mapas_id', $ruta->mapas_id, ['class' => 'form-control' . ($errors->has('mapas_id') ? ' is-invalid' : ''), 'placeholder' => 'Mapas Id']) }}
            {!! $errors->first('mapas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>