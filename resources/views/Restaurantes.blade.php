@extends('layouts.app')

@section('template_title')

@section('content')
<div class="container text-center mt-5 bg-gray bold">
    <h1>Restaurantes Popayan</h1>
</div>

    

   

<div id="cards_landscape_wrap-2">
  <div class="container ">
      <div class="row">
          @foreach ($lugar as $lugar)
              @if ($lugar->tipolugar_id == 5)
                  
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
