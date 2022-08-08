@extends('layouts.app')

@section('content')

<section class=" text-center text-lg-start">
    <style>
  .gradient-custom {
    background: #6a11cb;
/* fallback for old browsers */
background-image:url("img/capula.png");
background-repeat: no-repeat;
background-size: cover;

}

.card-body{
    border-radius: 5%;
   background: hsla(0, 8%, 53%, 0.2);
   backdrop-filter: blur(5px);
}

 
    </style>
 
<section class="vh-100 gradient-custom ">
    <div class="container py-6 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
         
            <div class="card-body p-5 text-center ">
            <p>Login</p>
  
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-outline mb-4">
                        <label for="email" class="col-md-4 col-form-label">{{ __('Correo ') }}</label>

                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') es incorrecto  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="col-md-4 col-form-label ">{{ __('Contraseña') }}</label>

                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    
                    <button class="btn btn-primary btn-lg btn-block"  type="submit"> 
                        {{ __('Login') }}
                    </button>

                    <hr class="my-1">

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('olvidó su contraseña?') }}
                                </a>
                            @endif

                            
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
