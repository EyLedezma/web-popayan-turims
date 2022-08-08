<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ubicasion') }}
            {{ Form::text('ubicasion', $gastronomia->ubicasion, ['class' => 'form-control' . ($errors->has('ubicasion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicasion']) }}
            {!! $errors->first('ubicasion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $gastronomia->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::text('horarios', $gastronomia->horarios, ['class' => 'form-control' . ($errors->has('horarios') ? ' is-invalid' : ''), 'placeholder' => 'Horarios']) }}
            {!! $errors->first('horarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoplato_id') }}
            {{ Form::select('tipoplato_id',$tipoplato, $gastronomia->tipoplato_id, ['class' => 'form-control' . ($errors->has('tipoplato_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipoplato Id']) }}
            {!! $errors->first('tipoplato_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>