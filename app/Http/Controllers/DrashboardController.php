<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrashboardController extends Controller
{
    public function index() 
    {
      return view('drashboard');
    }
}
