@extends('leyout.content')

@section('title', 'Eliminar articulo')
    

@section('principal')
<div class="container">

<!-- Jumbotron -->
<div class="jumbotron text-center">
  
    <!-- Title -->
    <h4 class="card-title h4 pb-2"><strong>¿Desea eliminar este producto? </strong></h4>
  
    <!-- Card image -->
    <div class="view overlay my-4">
      <img src="/storage/{{$producto->imagen}}" class="img-fluid" alt="">
    <div class="mask rgba-white-slight">
      <h2>{{$producto->nombre}}</h2>
    <p>${{$producto->precio_actual}}</p>
    </div>
    </div>
    
    <form action="/admin/delete" method="POST">
        @csrf
    <input type="hidden" name="id" value="{{$producto->id}}">
        <button type="submit" class="btn btn-danger" >Eliminar</button>
        <a class="btn btn-info" href="/admin/index">Cancelar</a>

    </form>

  
  </div>

</div>


@endsection