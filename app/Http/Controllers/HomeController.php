<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {

      $categorias = Categoria::where('status','=',1)->get();  
      return view('home', ['categorias' => $categorias]);
    }

    public function show($slug) 
    {
    

      $banner = Categoria::where('slug','=',$slug)->get()->first();  


    


      return view('lista_categoria', ['banner'=> $banner]);
    }
}
