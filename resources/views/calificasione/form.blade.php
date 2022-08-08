<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $calificasione->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reseñas') }}
            {{ Form::text('reseñas', $calificasione->reseñas, ['class' => 'form-control' . ($errors->has('reseñas') ? ' is-invalid' : ''), 'placeholder' => 'Reseñas']) }}
            {!! $errors->first('reseñas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>