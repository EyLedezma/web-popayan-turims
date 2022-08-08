@extends('layouts.app')

@section('template_title')
    {{ $tiposervicio->name ?? 'Show Tiposervicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tiposervicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiposervicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tiposervicio->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
