<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $data['header_title'] = 'Dashboard';

        if(Auth::user()->user_type == '1')
        {
            return view('superadmin.dashboard' , $data);
        }
        else if(Auth::user()->user_type == '2')
        {
            return view('admin.dashboard' , $data);
        }
        else if(Auth::user()->user_type == '3')
        {
            return view('employe.dashboard' , $data);
        }


    }





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
