@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $evento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ubucasion:</strong>
                            {{ $evento->ubucasion }}
                        </div>
                        <div class="form-group">
                            <strong>Horios:</strong>
                            {{ $evento->horios }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Inicio:</strong>
                            {{ $evento->fecha de inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $evento->fecha fin }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoeventos Id:</strong>
                            {{ $evento->tipoeventos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
