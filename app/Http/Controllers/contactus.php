<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactus extends Controller
{
     public function index()
    {
        $data=array();
       return view('contactus',$data);
    } 
}
