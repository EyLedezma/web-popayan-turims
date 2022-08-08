@extends('layouts.app')

@section('template_title')
    Create Lugar
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Lugar</span>
                    </div>

                

                    <div class="card-body">
                    
                        <form method="POST" action="{{ route('lugars.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('lugar.form')
                            <div class="grid grid-cols-1 mt-5 mx-7">
                                <img id="imagenSeleccionada"  height="80">           
                            </div>
                            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
                        </form>
                        <script>   
                            $(document).ready(function (e) {   
                                $('#foto_url').change(function(){            
                                    let reader = new FileReader();
                                    reader.onload = (e) => { 
                                        $('#imagenSeleccionada').attr('src', e.target.result); 
                                    }
                                    reader.readAsDataURL(this.files[0]); 
                                });
                            });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection