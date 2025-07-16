<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
        return view('dashboardAdmin.index');
    }

    public function login(){
        return view('ingreso.loginP');
    }

    public function register(){
        return view('ingreso.RegisterP');
    }

}
