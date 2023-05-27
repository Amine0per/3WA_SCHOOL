<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;

class AuthController extends Controller
{
 /**
     * Display a listing of the resource.
     */

    public function index()
    {
        if(!empty(Auth::check()))
        {  
            if(Auth::user()->user_type == '1')
            {
                 return redirect('superadmin/dashboard');
             }
             else if(Auth::user()->user_type == '2')
             {
                 return redirect('admin/dashboard');
             }
             else if(Auth::user()->user_type == '3')
             {
                 return redirect('employe/dashboard');
             }
        }

        return view('auth.login');
             
    }



    public function login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        $user = User::getEmailSingle($request->email);

        if (!empty($user)) { 
            if ($user->is_deleted == 0) 
            {  

                if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))      
                {
            
                   if(Auth::user()->user_type == '1')
                   {
                        return redirect('superadmin/dashboard');
                    }
                    else if(Auth::user()->user_type == '2')
                    {
                        return redirect('admin/dashboard');
                    }
                    else if(Auth::user()->user_type == '3')
                    {
                        return redirect('employe/dashboard');
                    }
                } 
                else
                {
                    return redirect()->back()->with('error', 'Email ou password invalide');
                }
            }
            else
            {
                return redirect('login')->with('error', 'Ce compte a ete supprime');
            }

          
        }
        
      
    }


    
    
    public function forgotpassword()
    {
       
       return view('auth.forgot');
      
    }
    public function PostForgotPassword(Request $request)
    {
       $user = User::getEmailSingle($request->email);
       if (!empty($user)) { 
            if ($user->is_deleted == 0) {   
                $user->remember_token = Str::random(30);
                $user->save();
                Mail::to($user->email)->send(new ForgotPasswordMail($user));
                return redirect()->back()->with('success', "Email de réinitialisation envoyé, veuillez vérifier votre boîte email.");
           } else {
                return redirect()->back()->with('error', "Ce compte a été supprimé.");
           }
       } else {
           return redirect()->back()->with('error', "Email introuvable.");
       }
    }

    public function reset($remember_token)
    {
       $user= User::getTokenSingle($remember_token);
       if(!empty($user))
       {
        $data['user'] = $user;
              return view('auth.reset' , $data);
       }
       else
       {
        abort(404);
       }
      
    }

    public function  PostReset($token , Request $request)
    {
      
       if($request->password == $request->cpassword)
       {
        $user= User::getTokenSingle($token);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(30);
        $user->save();   
        return redirect(url('login'))->with('success', "Mot de passe réinitialisé  avec succes");
       }
       else
       {
       return redirect()->back()->with('error', "Les mots de passes ne sont pas identiques");
       }
      
    }



    public function logout()
    {
       Auth::logout();
       return redirect(url(''));
      
    }



 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
