@extends('leyout.content')

@section('title', 'Crear articulo')
    

@section('principal')
<div class="container">


<a class=" m-2 float-right btn btn-primary" href="/admin/index">Volver</a>

@foreach ($errors->all() as $error)

<li>{{$error}}</li>
    
@endforeach



<form class="text-center border border-light p-5" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <p class="h4 mb-4"> Agregar Articulo</p>

    <!-- Nombre -->
    <input type="text" name="nombre" id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre" value="{{ old('nombre')}}">

    <!-- Precio actual -->
    <input type="number" name="precio_anterior" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Precio anterior"value="{{ old('precio_anterior')}}">

     <!-- Precio anterior -->
     <input type="number" name="precio_actual" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Precio actual"value="{{ old('precio_actual')}}">
       
     <!-- Stock -->
    <input type="number" name="stock" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Stock "value="{{ old('stock')}}">


    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="imagen">
        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
    </div>


    <!-- Boton de guardar  -->
    <button class="btn btn-info btn-block" type="submit">Guardar</button>

</form>
</div>


@endsection