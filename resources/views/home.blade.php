@extends('leyout.content')

@section('principal')

<style>
    
.jumbo{
    background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
}

</style>


<!-- Jumbotron -->
<div class="jumbo" >
<div class="card card-image jumbo" style="background-image: url(../images/1936315.jpg);">
    <div class="text-orange text-center rgba-stylish-strong py-5 px-4" style="color:black">
      <div class="py-5">
  
        <!-- Content -->
        <h5 class="h5 orange-text" style="margin: 150px"><i class="fas fa-baby-carriage"></i> Coloritos on-line</h5>
        <h2 class="card-title h2 my-4 py-2">BIEVENIDOS! </h2>
        @if (Auth::check())
        @if (Auth::user()->rol_id == 2) 
        <a class=" m-2 btn btn-success"   href="{{'/admin/index'}}"">Panel de administrador</a>
        @endif
        <p>Usuario:{{Auth::user()->name}}</p>
        <a class=" m-2 btn btn-success"  href="{{ route('/home')}}">Ir al home</a>
        @else
        <h3 class="mb-4 pb-2 px-md-5 mx-md-">Crea un usuario e ingresa a ver nuestro catalogo!
          <br>
          <a class="btn btn-warning" style="margin: 5px" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
          <h3 class="mb-4 pb-2 px-md-5 mx-md-">Tenes cuenta,ingresa!
            <br>
         <a class="btn btn-danger" style="margin: 5px" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
         </h3>
         @endif
  
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

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
