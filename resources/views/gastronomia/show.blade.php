@extends('layouts.app')

@section('template_title')
    {{ $gastronomia->name ?? 'Show Gastronomia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Gastronomia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('gastronomias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ubicasion:</strong>
                            {{ $gastronomia->ubicasion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $gastronomia->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Horarios:</strong>
                            {{ $gastronomia->horarios }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoplato Id:</strong>
                            {{ $gastronomia->tipoplato_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
