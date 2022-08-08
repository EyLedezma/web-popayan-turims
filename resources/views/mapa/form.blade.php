<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('gps') }}
            {{ Form::text('gps', $mapa->gps, ['class' => 'form-control' . ($errors->has('gps') ? ' is-invalid' : ''), 'placeholder' => 'Gps']) }}
            {!! $errors->first('gps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion') }}
            {{ Form::text('ubicacion', $mapa->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('multimedia') }}
            {{ Form::text('multimedia', $mapa->multimedia, ['class' => 'form-control' . ($errors->has('multimedia') ? ' is-invalid' : ''), 'placeholder' => 'Multimedia']) }}
            {!! $errors->first('multimedia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>