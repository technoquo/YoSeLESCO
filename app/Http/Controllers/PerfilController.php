<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perfil;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PerfilValidRequest;

class PerfilController extends Controller
{
    public function index(User $user)
    {
      
      
      $categorias = Categoria::orderBy('category', 'asc')->get();
      
      return view('perfiles.index', ['categorias' => $categorias]);
    }

    public function create() 
    {
        $categorias = Categoria::where('status','=',1)->orderBy('category', 'asc')->get();
        return view('perfiles.create', ['categorias' => $categorias]);
    }

    public function store(PerfilValidRequest $request)
    {

        $request->validated();
 
        $request->request->add(['username' => Str::slug($request->username)]);

        
     

        Perfil::create([
            'full_name' => $request->full_name,
            'username' => $request->username,
            'occupation' => $request->occupation,
            'imagen' => $request->imagen,
            'cell' => $request->cell,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'status' => $request->status === 'on',
            'categoria_id' => $request->categoria_id,
        ]);


        return redirect()->route('perfiles.index');
    }

    public function edit($id)
    {
        $categorias = Categoria::where('status','=', 1)->orderBy('category', 'asc')->get();
      
        return view(
            'perfiles.edit',
            [
            'perfil' => Perfil::where('id', $id)->first(),
            'categorias' => $categorias
            ]
        );
    }

    public function update(PerfilValidRequest $request, $id)
    {

      
        $request->validated();
 

        $request->request->add(['username' => Str::slug($request->username)]);
    Perfil::where('id', $id)->update(
        $request->status === 'on' 
            ? array_replace($request->except('_token', '_method'), ['status' => true])
            : array_replace($request->except('_token', '_method'), ['status' => false])
    );
        return back()->with('success','Perfil actualizado');
    
    
    }

}
