<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        $categorias = Categoria::where('status', '=', 1)->orderBy('category', 'asc')->get();
        return view('categorias.index', ['categorias' => $categorias]);
    }


    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
            $this->validate($request, [
            'category' => 'required',
            'imagen' => 'required'
        ]);

        Categoria::create([
            'category' => $request->category,
            'banner' => $request->imagen,
            'status' => $request->status === 'on'
        ]);


        return redirect()->route('categorias.index', auth()->user()->name);
    }

    public function edit($id)
    {
        return view(
            'categorias.edit',
            ['category' => Categoria::where('id', $id)->first()]
        );
    }

    public function update(Request $request, $id)
    {

      
        $request->validate([
            'category' => 'required',
            'imagen' => 'required'
        ]);


        // Categoria::where('id', $id)->update($request->except(
        // ['_token', '_method']
        // ));
        Categoria::where('id', $id)->update([
            'category' => $request->category,
            'banner' => $request->imagen,
            'status' => $request->status === 'on'
        ]);

        $categorias = Categoria::where('status', '=', 1)->orderBy('category', 'asc')->get();
        return view('categorias.index', ['categorias' => $categorias]);
    
    
    }
}
