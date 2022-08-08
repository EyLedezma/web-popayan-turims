@extends('layouts.app')

@section('template_title')
    editar perfil
@endsection

@section('content')

<style>
   
  
  .card-body{
    
     background: hsla(11, 8%, 53%, 0.2);
     backdrop-filter: blur(8px);
    background-color:
  }
  
   
      </style>
   
    <div class="card-body">

        

        <div id="cont1" class="container">
            <div class="row mb-3">
                <h2 class="text-center"> Hola {{ Auth::user()->name }}, aquí puedes actualizar tus datos</h2>


                <form method="POST" action="{{ route('changePassword') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="form-group">
                            <label for="name">Nombre de Usuario</label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group ">
                            <label for="name">correo</label>
                            <input type="email" name="name" value="{{ Auth::user()->email }}" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group ">
                            <label for="name">Clave Actual</label>
                            <input type="password" name="password_actual" class="form-control is-invalid">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-group ">
                            <label for="new_password">Clave Nueva</label>
                            <input type="password" name="new_password" class="form-control is-invalid">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group ">
                            <label for="comfirm_password">Confirmar clave nueva</label>
                            <input type="password" name="confirm_password" class="form-control is-invalid">


                            <div class="row text-center mb-4 mt-5">
                                <div class="cold-md-12">
                                    <button type="submit" class=" btn btn-danger" id="formSubmit">Guardar
                                        cambios</button>

                                </div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>

</div>
@endsection
