@extends('layouts.app')

@section('template_title')

@section('content')

    <header class="header linear-white sendersimo-img">

        <section class="container">

            <div class="row justify-content-md-center">
                <!-- en este pedaso se pone texto relacionado al tema de turismo -->

                <div class="col-12 text-center">
                    <h2 class="text-danger text-uppercase">popayán</h2>
                    <h3 class="text-capitalize">Las mejores rutas de Trekking y Senderismo en Popayán, Cauca (Colombia) </h3>
                    <p class="text-muted">Buscas las mejores rutas de senderismo en Popayán? Si te estás preparando para
                        hacer senderismo, ciclismo, correr o explorar otras actividades al aire libre.

                        las más destacadas de Popayán se encuentran:

                    </p>
                </div>
            </div>




            <div id="cards_landscape_wrap-2">
                <div class="container ">
                    <div class="row">
                        @foreach ($lugar as $lugar)
                            @if ($lugar->tipolugar_id == 2)
                                
                                <div class="card-imga col-3">
                                    <div class="text-box">
                                        <div class="face front col-3">
                                            <img  src="{{ 'http://localhost/popayanturims/public/storage/Fotos/'.$lugar->foto_url }} " width="95%"alt="" />
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
              </header>

    <!-- galeria de los lugares -->
    {{-- <div class="text-center pt-5">

                    <div>
                        <h1 class="">galeria </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>

                    </div>
                    <div class="row galeria">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3597423/pexels-photo-3597423.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/1005417/pexels-photo-1005417.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3621344/pexels-photo-3621344.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3692550/pexels-photo-3692550.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                        <div class="col-lg-4">
                            <img src="https://images.pexels.com/photos/3693787/pexels-photo-3693787.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>

                    </div>

                    <div>
                        <h1 class="">rutas mas populares
                        </h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>


                        <div id="cards_landscape_wrap-2">
                          <div class="container ">
                              <div class="row">
                                  @foreach ($lugar as $lugar)
                                  @if ($lugar->tipolugar_id == 2);
                                      <div class="card-flyer col-3">
                                          <div class="text-box">
                                              <div class="image-box ">
                                                  <img src="foto_url/{{ $lugar->foto_url }} " width="95%"alt="" />
                                              </div>
                                              <div class="text-container">
                                                  <h6 class="card-title">{{ $lugar->nombre }}
                                              </div>
                                          </div>
                                      </div>
                                         @endif
                                  @endforeach
 
                                </section>
                         </div>
                             <div class="card_ultima bg-dark">
                                    <div class="face front">
                                    <img src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&w=300"
                                        alt="imagen">
                                 <h3>holaaa</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing.
                            </p>
                            <div class="link">
                                <a href="" class="" id="detalles">detalles </a>
                            </div>
                        </div>
                    </div> 

        </section> --}}

@endsection
