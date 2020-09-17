@extends('leyout.content')

@section('title', 'Coloritos')
    

@section('principal')
<div class="todo">
<div class="container">
  <div class="titulo">
    <h1 class="text-center">Nuestros Articulos</h1>
    </div>
  <div class="row col-md-12 d-flex justify-content-center mb-5">
    @foreach ($productos as $producto)
    <div class="card text-center" style="margin: 10px">
      <img class="card-img-top " style="max-height: 50%" src="/storage/{{$producto->imagen}}" alt="Imagen del articulo">
      <div class="card-body">
        <h5 class="card-title">{{$producto->nombre}}</h5>
        <div style="font-size: 25px;">
        <strike><h5 class="anterior">${{$producto->precio_anterior}}</h5></strike>
         <strong> <h5">${{$producto->precio_actual}}</h5></strong>
        </div>
      </div>
      <div class="card-footer">
        <small class="text-muted">Stock : {{$producto->stock}}</small>
      </div>
    </div>
    @endforeach
</div>

  </div>
</div>
    
<div>
  {{$productos->appends($_GET)->links()}}
</div>

</div>

<section>
  <!-- Footer -->
 <!-- Footer -->
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