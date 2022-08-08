@extends('layouts.app')

@section('template_title')
    {{ $mapa->name ?? 'Show Mapa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Mapa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mapas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Gps:</strong>
                            {{ $mapa->gps }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $mapa->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Multimedia:</strong>
                            {{ $mapa->multimedia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
