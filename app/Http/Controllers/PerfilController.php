<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(User $user)
    {
       
        
        return view('perfiles.index');
    }

}
