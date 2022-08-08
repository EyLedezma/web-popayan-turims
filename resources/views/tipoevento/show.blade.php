@extends('layouts.app')

@section('template_title')
    {{ $tipoevento->name ?? 'Show Tipoevento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipoevento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipoeventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoevento->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
