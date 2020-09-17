<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('ValidarAdmin')->except('index',);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');
        $productos = Product::where('nombre','like',"%$nombre%")->orderBy('nombre')->paginate(6);
        return view('productos.index',compact('productos'));
        //,compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('admin.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas =[
            "nombre" => "required|string|min:3",
            "precio_actual" => "required|integer",
            "precio_anterior" => "required|integer",
            "stock" => "required|max:1",

            /*$ruta = $request->file("imagen")->store("public");
            $nombreArchivo = basename($ruta);

            Product::create($request->all());
            */
        ];
        $mensajes =[
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximos de :max",
            "integer" => "El campo :attribute debe ser un número",
            "required" => "El campo :attribute es obligatorio",
             
        ];
        
        $this->validate($request, $reglas, $mensajes);


        $producto = new Product();

        $ruta = $request->file("imagen")->store("public");
        $nombreArchivo = basename($ruta);
        
        $producto->imagen = $nombreArchivo;
        $producto->nombre = $request['nombre'];
        $producto->precio_actual = $request['precio_actual'];
        $producto->precio_anterior = $request['precio_anterior'];
        $producto->stock = $request['stock'];

        $producto->save();
        

        return redirect('/admin/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Product::find($id);

        $vac = compact('producto');
        
        return view('admin.show' , $vac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Product::where('id',$id)->firstOrFail();

        $vac = compact('producto');
        
        return view('admin.edit',$vac);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
 
        $producto= Product::findOrFail($id);

        $request->validate([
            "nombre" => "required|string|min:3",
            "precio_actual" => "required|integer",
            "precio_anterior" => "required|integer",
            "stock" => "required|max:1",
         ]);

         $ruta = $request->file("imagen")->store("public");
        $nombreArchivo = basename($ruta);

        $producto->imagen = $nombreArchivo;
        $producto->nombre = $request['nombre'];
        $producto->precio_actual = $request['precio_actual'];
        $producto->precio_anterior = $request['precio_anterior'];
        $producto->stock = $request['stock'];


        $producto->save();

    
        /*
        $reglas = [
            "nombre" => "required|string|min:3",
            "precio_actual" => "required|integer",
            "precio_anterior" => "required|integer",
            "stock" => "required|max:1",

            

        ];
        $mensajes =[
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximos de :max",
            "integer" => "El campo :attribute debe ser un número",
            "required" => "El campo :attribute es obligatorio",

        ];
        
        $this->validate($request, $reglas, $mensajes);


        $producto = Product::find($request->input('id'));

        dd($producto);

        $producto->nombre = $request['nombre'];
        $producto->precio_actual = $request['precio_actual'];
        $producto->precio_anterior = $request['precio_anterior'];
        $producto->stock = $request['stock'];
        redirect('/admin/index');
        */

        return redirect('/admin/index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request['id'];

        $producto = Product::find($id);

        $producto->delete();

        return redirect('/home');
    }
}
