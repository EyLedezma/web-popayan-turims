@extends('layouts.app')

@section('template_title')

@section('content')


<header class="header linear-white museos-img">

    <section class="container">

        <div class="row justify-content-md-center">
            <!-- en este pedaso se pone texto relacionado al tema de turismo -->

            <div class="col-12 text-center">
                <h2 class="text-danger text-uppercase">popayán</h2>
                <h3 class="text-capitalize"> Descubre y explora el arte colonial de popayán</h3>
                <p class="text-muted"> Ven y conoce los museos de la Ciudad blanda de colombia

                </p>
            </div>
        </div>



        <div id="cards_landscape_wrap-2">
            <div class="container ">
                <div class="row">
                    @foreach ($lugar as $lugar)
                        @if ($lugar->tipolugar_id == 3)
                            ;
                            <div class="card-imga col-3">
                                <div class="text-box">
                                    <div class="face front col-3">
                                        <img   src="{{ 'http://localhost/popayanturims/public/storage/Fotos/'.$lugar->foto_url }} "/>
                                        <h3>{{ $lugar->nombre }}</h3>
                                    </div>
                                    <div class="face back">
                                        <div class="text-container">
                                            <h3>{{ $lugar->descripcion }}</h3>
                                            <h3>Direcion: {{ $lugar->direccion }}</h3>
                                            <h3>Horarios: {{ $lugar->horarios }}</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
             </section>


           

@endsection

