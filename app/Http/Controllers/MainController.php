<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Index()
    {
        return view('countries');

     }
     //end method index
}
