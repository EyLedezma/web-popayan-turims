@extends('layouts.app')

@section('template_title')
    {{ $convenio->name ?? 'Show Convenio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Convenio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('convenios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $convenio->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $convenio->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $convenio->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $convenio->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipconvenios Id:</strong>
                            {{ $convenio->tipconvenios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Lugares Id:</strong>
                            {{ $convenio->lugares_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
