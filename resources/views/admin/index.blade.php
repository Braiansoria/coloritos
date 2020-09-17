@extends('leyout.content')

@section('titulo', 'AdminPanel')
    

@section('principal')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Admin panel</h3>

        <div class="card-tools">
         <form>
            @csrf
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="nombre" class="form-control float-right" placeholder="Buscar"
            value="{{ request()->get('nombre')}}">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <a class=" m-2 float-right btn btn-primary" href="{{ route('admin.create')}}">Crear</a>
        <a class=" m-2 float-right btn btn-success" href="{{ route('/home')}}">Ir al home</a>
        <table class="table table-head-fixed">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Precio actual</th>
              <th>Precio anterior</th>
              <th>Stock </th>
              <th colspan="3"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($productos as $producto)
            <tr>
              <td>{{$producto->id}}</td>
              <td>{{$producto->nombre}}</td>
              <td>{{$producto->precio_actual}}</td>
              <td>{{$producto->precio_anterior}}</td>
              <td>{{$producto->stock}}</td>

            <td><a class="btn btn-info" href="/admin/{{$producto->id}}/edit">Editar</a></td>
            <td><a class="btn btn-danger" href="{{ route('admin.show',$producto->id)}}">Ver</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$productos->appends($_GET)->links()}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection