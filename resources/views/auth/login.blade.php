@extends('leyout.content')

@section('principal')


<div class="todo">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin: 100px">
                <div class="card-header text-center">{{ __('Registrate') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-8 offset-md-4">
                                <label class="form-check-label" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    {{ __('Recordar') }}
                                </label>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>                     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<section>
 <!-- Footer -->
<<!-- Footer -->
<footer class="page-footer font-small cyan darken-3 text-center">

    <!-- Footer Elements -->
    <div class="container">

        <h6>Visitanos en las redes</h6>

  
      <!-- Grid row-->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">
              <!-- Facebook -->
            <a class="fb-ic">
                <a href="https://www.facebook.com/coloritos.online.7"><i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                </a>
            </a>    
            <!--Whats app -->
            <a class="li-ic">
                <a href="https://wa.link/burwzk
                "><i class="fab fa-whatsapp -in fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                </a>
            </a>

            <!--Instagram-->
            <a class="ins-ic">
                <a href="https://www.instagram.com/coloritosonline/?fbclid=IwAR3G_HqHkmDRrYNDnPY8xe2vBWmt8nPFZJBLpx0KyW3Uk8vzRHrrMR4H0mw">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            </a>
          </div>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Coloritos
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
        </section>

        @endsection
