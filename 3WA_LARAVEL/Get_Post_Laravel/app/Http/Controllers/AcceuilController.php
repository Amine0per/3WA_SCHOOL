<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function ShowAcceuil()  {

        return view('Acceuil');

    }
}
