<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
  
    public function application() {
        return view("Aithsh");
    }
   
    public function statement() {
        return view("Dhlwsh");
    }
    public function Submission() {
        return view("Ypovoli");
    }

    public function application2() {
        return view("application");
    
    }

    public function application3() {
        return view("application3");
    
    }

    
}
