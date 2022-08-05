<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;



class ImagenController extends Controller
{
    //
    public function store(Request $request)
    {
        $imagen = $request->file('file');
       
       
          $nombreImagen = Str::uuid() . "." . $imagen->extension();
          $imagenPath = public_path('uploads') . '/' . $nombreImagen;
          $imagen->move(public_path('uploads'), $imagenPath);
          return response()->json(['imagen' => $nombreImagen ]);
    }
}