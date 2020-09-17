<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('ValidarAdmin');

    }


    public function index(Request $request){

        $nombre = $request->get('nombre');
        $productos = Product::where('nombre','like',"%$nombre%")->orderBy('nombre')->paginate(4);
        return view('admin.index',compact('productos'));
        //,compact('categorias'));
    }
}
