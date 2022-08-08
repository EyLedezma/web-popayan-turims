@extends('layouts.app')

@section('template_title')

@section('content')
<div class="container text-center mt-5 bg-gray bold">
    <h1>Hospitales Popayan</h1>
</div>

    

   

        @foreach ($lugar as $lugar)
       
        <div class="row mt-4"> 
        <div class="col-sm-12 col-md-3 col-lg-4 py-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><p> {{ $lugar->nombre }}</p></h5>
                <p  class="card-text">  {{ $lugar->direccion }}
                  {{ $lugar->horarios }}
                  {{ $lugar->descripcion }}.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
    </div>
</div> 
          
          
          

        @endforeach
     
               

        @endsection
