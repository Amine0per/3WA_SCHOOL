<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function ShowContact()  {

        return view('Contact');

    }

    public function SubmitForm(Request $request)  {
        DB::table('matable')->insert([
        'Nom' => $request->input("Nom"),
        'Prenom' => $request->input("Prenom"),
        'Email' => $request->input("Email"),
        'Motdepasse' => $request->input("Motdepasse"),
        'created_at'=> now() ,
        'updated_at'=> now() ,
       
        ]);
        return redirect('/');
    }

}
