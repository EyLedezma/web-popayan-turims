@extends('layouts.app')

@section('template_title')

@section('content')
    {{-- <div class="container text-center mt-5 bg-gray bold">
    <h1>Iglesias Popayan</h1>
</div> --}}


    <header class="header linear-white iglesia-img">

        <link rel="shortcut icon" type="image/png" href="{{ asset('img/capulo.png') }}">
        <link rel="shortcut icon" sizes="192x192" href="{{ asset('img/capulo.png') }}">

        <div class="container vh-50">
            <!-- descripcion -->
            <div class="row  h-100 align-items-center">
                <div class="col-10 col-lg-6 text-white">
                    <!-- title -->
                    <h1 class="text-capitalize ">
                        <span class="text-danger h5">popayán</span><br />turims Iglesias
                    </h1>

                    <!-- descripcion -->
                    <p class="d-none d-md-block">La mayoría de los templos religiosos de Popayán se construyeron entre los
                        siglos XVII y XVIII con recursos que provenían de las familias acaudaladas de la ciudad quienes
                        conservaban una cultura religiosa influenciada desde europa, influencia que también maracab el poder
                        político y económico de la ciudad.</p>
                    <!--boton -->
                    <a href="#" class="text-reset btn btn-danger">leer mas </a>
                </div>


            </div>
            <!-- 44 -->

        </div>
        </div>
        <!-- separador  con imagen -->
        <img src="./img/cuts/cut-header.svg" alt="">

    </header>

    <section class="container">

        <div class="row justify-content-md-center">
            <!-- en este pedaso se pone texto relacionado al tema de turismo -->

            <div class="col-12 text-center">
                <h2 class="text-danger text-uppercase">popayán</h2>
                <h3 class="text-capitalize">las iglesias mas visitadas de la ciudad </h3>
                <p class="text-muted">Los templos de la ciudad ostentan grandes valores arquitectónicos y artísticos
                    representados en los estilos neoclásico, barroco tardío, mudéjar y renacentista tradicional, acompañados
                    de tallas, pinturas, trabajos de platería en altares y sagrarios, objetos que se han convertido en
                    representantes del patrimonio aruitectónico y cultural de la ciudad y el país.

                    Entre las edificaciones religiosas más destacadas de Popayán se encuentran:

                </p>
            </div>
            <!-- card -->
            <!-- card #1 -->
            <article class="col-md-6 col-lg-3 card-effect mb-3 mb-md-0">
                <div class="card">
                    <img src="https://media.istockphoto.com/photos/sunsets-on-popayan-picture-id1335778651?b=1&k=20&m=1335778651&s=170667a&w=0&h=xuqX7F6Jneu4UtyewJisccG4LgeXd9y_SkuCLBZYXxY="
                        alt="torre" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <h4 class="card-title">Iglesia de San Francisco</h4>
                        <p class="card-text">Según el arquitecto, crítico e historiador Germán Téllez, la fachada de este
                            templo constituye la mejor muestra del barroco en toda Colombia. Su construcción fue comisionada
                            por las familias Valencia y Arroyo.</p>
                        <a href="#" class="text-reset">leer mas </a>
                    </div>
                </div>
            </article>

            <!-- card #2 -->
            <article class="col-md-6 col-lg-3 card-effect  mb-3 mb-md-0">
                <div class="card">
                    <img src="https://media.istockphoto.com/photos/church-of-santo-domingo-popayan-colombia-picture-id186073664?k=20&m=186073664&s=612x612&w=0&h=D7ALcBKY4zT2n-V6_8i8RJHxbbYg81VLRKgT4ajiAhk="
                        alt="iglesia" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <h4 class="card-title">Iglesia de Santo Domingo</h4>
                        <p class="card-text">Obra tardía del barroco neogranadino, diseñada por el arquitecto español
                            Antonio García por encargo de la familia Arboleda. Posee excelentes muestras de arquitectura,
                            orfebrería y mobiliario de las escuelas quiteña y española.</p>
                        <a href="#" class="text-reset">leer mas </a>
                    </div>
                </div>
            </article>



            <!-- card #3-->
            <article class="col-md-6 col-lg-3 card-effect mt-md-4 mt-lg-0">
                <div class="card">
                    <img src="https://media.istockphoto.com/photos/the-ermita-on-a-dawn-picture-id1138490864?k=20&m=1138490864&s=612x612&w=0&h=IgOPRWbObv4qZ5qTaML1QAN5opx4aPJJV4JqewuGTIY="
                        alt="iglesia2" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="text-reset">Goooooo moreeeee</a>
                    </div>
                </div>
            </article>

            <!-- card #3-->
            <article class="col-md-6 col-lg-3 card-effect mt-md-4 mt-lg-0">
                <div class="card">
                    <img src="https://media.istockphoto.com/photos/the-ermita-on-a-dawn-picture-id1138490864?k=20&m=1138490864&s=612x612&w=0&h=IgOPRWbObv4qZ5qTaML1QAN5opx4aPJJV4JqewuGTIY="
                        alt="iglesia2" class="card-img  card-img-filter " />
                    <div class="card-img-overlay   text-white d-flex flex-column justify-content-center text-center">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="text-reset">Goooooo moreeeee</a>
                    </div>
                </div>
            </article>
        </div>

            <div class="container ">
                <div class="row">
                    @foreach ($lugar as $lugar)
                        @if ($lugar->tipolugar_id == 1)
                            ;
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
@endsection