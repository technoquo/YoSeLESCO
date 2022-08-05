<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perfil;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(User $user)
    {
      return view('perfiles.index');
    }

    public function create() 
    {
        $categorias = Categoria::where('status','=',1)->orderBy('category', 'asc')->get();
        return view('perfiles.create', ['categorias' => $categorias]);
    }

    public function store(Request $request)
    {
 
        $request->request->add(['username' => Str::slug($request->username)]);

        
        $this->validate($request, [
                'full_name' => 'required',
                'username' => 'required',
                'occupation' => 'required',
                'imagen' => 'required',
                'id_category' => 'required'
        ]);

        Perfil::create([
            'full_name' => $request->full_name,
            'username' => $request->username,
            'occupation' => $request->occupation,
            'imagen' => $request->imagen,
            'cell' => $request->cell,
            'email' => $request->email,
            'instagram' => $request->instragam,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'status' => $request->status === 'on',
            'id_category' => $request->id_category,
        ]);


        return redirect()->route('perfiles.index');
    }

}
