<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function store(Request $request)
    {
        $banner = $request->file('file');
       
       
          $bannerImagen = Str::uuid() . "." . $banner->extension();
          $bannerPath = public_path('uploads') . '/' . $bannerImagen;
          $banner->move(public_path('uploads'), $bannerPath);
          return response()->json(['banner' => $bannerImagen ]);
    }
}
