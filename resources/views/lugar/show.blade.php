@extends('layouts.app')

@section('template_title')
    {{ $lugar->name ?? 'Show Lugar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lugar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $lugar->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $lugar->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Horarios:</strong>
                            {{ $lugar->horarios }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $lugar->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Foto Url:</strong>
                            {{ $lugar->foto_url }}
                        </div>
                        <div class="form-group">
                            <strong>Tipolugar Id:</strong>
                            {{ $lugar->tipolugar_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rutas Id:</strong>
                            {{ $lugar->rutas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Gastronomia Id:</strong>
                            {{ $lugar->gastronomia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $lugar->evento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Calificasiones Id:</strong>
                            {{ $lugar->calificasiones_id }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $lugar->servicios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
