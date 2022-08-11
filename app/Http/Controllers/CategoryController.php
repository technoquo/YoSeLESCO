<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryValidRequest;

class CategoryController extends Controller
{

    public function index()
    {

        $categorias = Categoria::orderBy('category', 'asc')->get();
        return view('categorias.index', ['categorias' => $categorias]);
    }


    public function create()
    {
        return view('categorias.create');
    }

    public function store(CategoryValidRequest $request)
    {
            $request->validated();

        Categoria::create([
            'category' => $request->category,
            'icono' => $request->imagen,
            'banner' => $request->banner,
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

    public function update(CategoryValidRequest $request, $id)
    {

      
        $request->validated();


        // Categoria::where('id', $id)->update($request->except(
        // ['_token', '_method']
        // ));
        Categoria::where('id', $id)->update([
            'category' => $request->category,
            'banner' => $request->imagen,
            'status' => $request->status === 'on'
        ]);

         return back()->with('success','Categoría actualizado');
    
    
    }
}
