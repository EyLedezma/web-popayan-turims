<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $evento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubucasion') }}
            {{ Form::text('ubucasion', $evento->ubucasion, ['class' => 'form-control' . ($errors->has('ubucasion') ? ' is-invalid' : ''), 'placeholder' => 'Ubucasion']) }}
            {!! $errors->first('ubucasion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horarios') }}
            {{ Form::text('horarios', $evento->horarios, ['class' => 'form-control' . ($errors->has('horios') ? ' is-invalid' : ''), 'placeholder' => 'horarios']) }}
            {!! $errors->first('horios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de inicio') }}
            {{ Form::text('fecha de inicio', $evento->fechainicio, ['class' => 'form-control' . ($errors->has('fecha de inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Inicio']) }}
            {!! $errors->first('fecha de inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha fin') }}
            {{ Form::text('fecha fin', $evento->fechafin, ['class' => 'form-control' . ($errors->has('fecha fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoeventos_id') }}
            {{ Form::text('tipoeventos_id', $evento->tipoeventos_id, ['class' => 'form-control' . ($errors->has('tipoeventos_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipoeventos Id']) }}
            {!! $errors->first('tipoeventos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>